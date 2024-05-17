<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buying;
use App\Models\Product;
use App\Models\Inventory; 

class BuyingController extends Controller
{
    public function index()
    {
        $buyings = Buying::all();
        return view('buyings.index', compact('buyings'));
    }

    public function create()
    {
        $products = Product::all();
        return view('buyings.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'amount' => 'required|numeric|min:1',
            'payment_type' => 'required',
            'notes' => 'nullable|string',
        ]);

        $product = Product::findOrFail($request->product_id);
        $total = $product->base_cost * $request->amount;

        $buying = new Buying([
            'product_id' => $request->product_id,
            'amount' => $request->amount,
            'total' => $total,
            'payment_type' => $request->payment_type,
            'notes' => $request->notes,
        ]);
    
        // Guardar el registro en la base de datos
        $buying->save();

        // Update inventory
        $product = Product::findOrFail($request->product_id);
        $inventory = Inventory::where('product_id', $product->id)->first();
        if ($inventory) {
            $inventory->amount += $request->amount;
            $inventory->save();
        } else {
            Inventory::create([
                'product_id' => $product->id,
                'amount' => $request->amount,
            ]);
        }
        

        return redirect()->route('buyings.index')->with('success', 'Compra registrada correctamente.');
    }
}

