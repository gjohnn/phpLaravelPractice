<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function getByCategory(string $category){
        return Service::where("category", $category)->get();
    }

    //General functions
    public function index()
    {
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
        $validatedData = $request->validate([
            'title' => 'required|string|max:50',
            'category' => 'required|string|max:50', 
            'image' => 'nullable|string|max:255', 
            'description' => 'required|string',
        ]);

        $service = Service::create($validatedData);

        return response()->json(['message' => 'Service created successfully', 'service' => $service], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return response()->json($service);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return response()->json(['message' => 'Show form to edit the service', 'service' => $service]);
    }

    /**
     * Update the specified resource in storage.
     */
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
