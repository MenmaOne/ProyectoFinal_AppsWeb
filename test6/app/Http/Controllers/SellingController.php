<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Selling;
use App\Models\Product;
use App\Models\Inventory; 

class SellingController extends Controller
{
    public function index()
    {
        $sellings = Selling::all();
        return view('sellings.index', compact('sellings'));
    }

    public function create()
    {
        $products = Product::all();
        return view('sellings.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'amount' => 'required|integer|min:1',
            'payment_type' => 'required',
            'notes' => 'nullable|string',
        ]);

        // Check if product exists in inventory
        $inventory = Inventory::where('product_id', $request->product_id)->first();
        if (!$inventory || $inventory->amount < $request->amount) {
            return redirect()->back()->with('error', 'Producto sin stock disponible.');
        }

        $product = Product::findOrFail($request->product_id);

        $selling = new Selling();
        $selling->product_id = $request->product_id;
        $selling->amount = $request->amount;
        $selling->total = $product->base_price * $request->amount; // Calculating total
        $selling->payment_type = $request->payment_type;
        $selling->notes = $request->notes;
        $selling->save();

        // Update inventory
        $inventory->amount -= $request->amount;
        $inventory->save();

        return redirect()->route('sellings.index')->with('success', 'Venta registrada exitosamente.');
    }
}
