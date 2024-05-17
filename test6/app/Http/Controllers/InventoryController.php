<?php

namespace App\Http\Controllers;
use App\Models\Inventory;
use Illuminate\Http\Request;
use App\Models\Product;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventories = Inventory::all();
        return view('inventories.index', compact('inventories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view('inventories.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|integer|min:0',
            'product_id' => 'required|exists:products,id',
            'notes' => 'nullable|string|max:1024',
        ]);

        $inventory = new Inventory([
            'amount' => $request->amount,
            'product_id' => $request->product_id,
            'notes' => $request->notes,
        ]);
        
        $inventory->save();

        return redirect()->route('inventories.index')->with('success', 'Inventario creado exitosamente.');
    }
}

