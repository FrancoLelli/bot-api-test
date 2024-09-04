<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class VertexAIController extends Controller
{
    public function query(Request $request)
    {
        $request->validate([
            'question' => 'required|string',
        ]);

        $question = $request->input('question');

        // Endpoint y clave API (reemplaza con tus valores)
        $url = 'https://YOUR_VERTEX_AI_ENDPOINT';
        $apiKey = 'YOUR_API_KEY';

        // Solicitud a Vertex AI
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $apiKey,
            'Content-Type' => 'application/json',
        ])->post($url, [
            'instances' => [
                ['input' => $question]
            ]
        ]);

        return response()->json($response->json());
    }
}