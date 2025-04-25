<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class NLPService
{
    public function analyzeCase($description)
    {
        $response = Http::withToken(env('HUGGINGFACE_API_KEY'))
            ->post('https://api-inference.huggingface.co/models/distilbert-base-uncased', [
                'inputs' => $description,
            ]);

        return $response->json();
    }
}


