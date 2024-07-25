<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Log\Logger;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{
    public function getByCategory(string $category)
    {
        return Service::where("category", $category)->get();
    }

    //General functions
    public function index()
    {          
        Logger("asd");

        // Obtener todos los servicios
        $services = Service::get();
        return response()->json($services);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Este método generalmente se usa para mostrar un formulario en una aplicación web
        return response()->json(['message' => 'Show form to create a new service']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        try {
            echo "asdasd";
            $validatedData = $request->validate([
                'title' => 'required|string|max:50',
                'category' => 'required|string|max:50', 
                'image' => 'nullable|string|max:255', 
                'description' => 'required|string',
            ]);
    
            $service = Service::create($validatedData);
            return response()->json(['message' => 'Service created successfully', 'service' => $service], 201);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function show(Service $service)
    {
        return response()->json($service);
    }

    public function edit(Service $service)
    {
        return response()->json(['message' => 'Show form to edit the service', 'service' => $service]);
    }

    public function update(Request $request, Service $service)
    {
        // Validar los datos de entrada
        $validatedData = $request->validate([
            'title' => 'required|string|max:50',
            'category' => 'required|string|max:50',
            'image' => 'nullable|string|max:255',
            'description' => 'required|string',
        ]);

        $service->update($validatedData);
        return response()->json(['message' => 'Service updated successfully', 'service' => $service]);
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return response()->json(['message' => 'Service deleted successfully']);
    }
}
