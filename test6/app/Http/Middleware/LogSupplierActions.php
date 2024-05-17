<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\SuppliersLog;

class LogSupplierActions
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        if (Auth::check()) {
            // Obtener el usuario autenticado
            $user = Auth::user();

            // Determinar la acción realizada
            $action = '';
            switch ($request->getMethod()) {
                case 'PUT':
                case 'PATCH':
                    $action = 'Editó';
                    break;
                case 'DELETE':
                    $action = 'Borró';
                    break;
                case 'GET':
                    $action = 'Mostró';
                    break;
                default:
                    break;
                    
            }

            // Si la acción se ha determinado
            if ($action !== '') {
                // Obtener el ID del proveedor
                $supplierId = null;
                if ($request->route('supplier')) {
                    $supplierId = $request->route('supplier')->id;
                }

            $supplier = $request->route('supplier');

            // Construir las notas con el nombre del proveedor si está disponible
            $notes = 'Acción hecha por el usuario: ' . $user->name;
            if ($supplier && $supplier->id) {
                $notes .= ' en el proveedor: ' . $supplier->name;
            }

                // Registro de la acción en la bitácora
                if ($supplierId !== null) {
                    SuppliersLog::create([
                        'supplier_id' => $supplierId,
                        'action' => $action,
                        'notes' => $notes,
                    ]);
                }
            }
        }

        return $response;
    }
}
