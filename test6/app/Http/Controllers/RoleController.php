<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            'name' => 'required|unique:roles|max:255',
            'notes' => 'required',
        ]);

        // Crear el rol
        $role = Role::create([
        'name' => $request->name,
        'notes' => $request->notes,
    ]);

        // Redireccionar con un mensaje
        return redirect()->route('roles.index')
            ->with('success', 'Rol creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        return view('roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        return view('roles.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        // Validación de datos
        $request->validate([
            'name' => 'required|unique:roles,name,' . $role->id . '|max:255',
            'notes' => 'required',
        ]);

        // Actualizar el rol
        $role->update($request->all());

        // Redireccionar con un mensaje
        return redirect()->route('roles.index')
            ->with('success', 'Rol actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        // Eliminar el rol
        $role->delete();

        // Redireccionar con un mensaje
        return redirect()->route('roles.index')
            ->with('success', 'Rol eliminado correctamente.');
    }
}
