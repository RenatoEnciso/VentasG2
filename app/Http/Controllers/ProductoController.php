<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class ProductoController extends Controller
{
    public function index()
    {
        $url = 'http://localhost:8081/producto'; // Ajusta la URL según tu servidor Spring Boot
        $response = Http::get($url);

        // Verificar si la solicitud fue exitosa y si hay datos en la respuesta
        if ($response->successful()) {
            $productos = $response->json();

            // Verificar si la respuesta es un array antes de contar los elementos
            if (is_array($productos)) {
                return view('productos.index', ['productos' => $productos]);
            } else {
                // Manejar el caso en que la respuesta no es un array
                return view('productos.index', ['productos' => []]);
            }
        } else {
            // Manejar el caso en que la solicitud no fue exitosa
            return view('productos.index', ['productos' => []]); // o puedes enviar un mensaje de error
        }
    }


    public function create()
    {
        return view('productos.create');
    }


    public function store(Request $request)
    {
        $url = 'http://localhost:8081/producto';
        
        $response = Http::post($url, [
            'pro_nombre' => $request->input('pro_nombre'),
            'pro_precio' => $request->input('pro_precio'),
            'pro_stock' => $request->input('pro_stock'),
            // Otros campos según tu estructura
        ]);

        if ($response->successful()) {
            // Producto creado exitosamente
            return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente.');
        } else {
            // Manejar el caso en que la solicitud no fue exitosa
            return redirect()->back()->with('error', 'Error al crear el producto. Por favor, inténtalo de nuevo.');
        }
    }


  
}
