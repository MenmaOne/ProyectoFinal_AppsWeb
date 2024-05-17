<?php

//hacer que esté vinculado con el proveedor

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener todos los productos de la base de datos
        $products = Product::all();
    
        // Pasar los productos a la vista y mostrarla
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categories = Category::all();
        $suppliers = Supplier::all();
        return view('products.create', compact('categories', 'suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Valida los datos del formulario
        $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'base_cost' => 'required|numeric',
        'base_price' => 'required|numeric',
        'category_id' => 'required|exists:categories,id',
        'supplier_id' => 'required|exists:suppliers,id',
        'notes' => 'required|string',
        // Agrega más reglas de validación según tus necesidades

    ]);

    // Crea un nuevo producto con los datos validados
    $product = Product::create($validatedData);

    // Redirecciona a la página de detalles del producto o muestra un mensaje de éxito
    return redirect()->route('products.index')->with('success', 'Producto creado exitosamente.');
    }

    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    // Buscar el producto por su ID
    $product = Product::findOrFail($id);
    
    // Pasar el producto a la vista show.blade.php
    return view('products.show', compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all(); 
        $suppliers = Supplier::all();
    
        return view('products.edit', compact('product', 'categories', 'suppliers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Valida los datos del formulario
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'base_cost' => 'required|numeric',
        'base_price' => 'required|numeric',
        'category_id' => 'required|exists:categories,id',
        'supplier_id' => 'required|exists:suppliers,id',
        'notes' => 'required|string',
        // Agrega más reglas de validación según tus necesidades
    ]);

    // Busca el producto por su ID
    $product = Product::findOrFail($id);

    // Actualiza el producto con los datos validados
    $product->update($validatedData);

    // Redirecciona a la página de detalles del producto o muestra un mensaje de éxito
    return redirect()->route('products.index')->with('success', 'Producto actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Busca el producto por su ID y elimínalo
        Product::findOrFail($id)->delete();

    // Redirecciona a la página de listado de productos o muestra un mensaje de éxito
    return redirect()->route('products.index')->with('success', 'Producto eliminado exitosamente.');
    }

}
