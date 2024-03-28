<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class RandomUserService
{
    // Declare the function as static
    public static function fetchData()
    {
        try{
            // Make a GET request to the API
            $response = Http::get('https://randomuser.me/api');

            // Check if the request was successful
            if ($response->successful()) {
                // Get the JSON response body
                $data = $response->json();
                return $data;
            } else {
                // Handle the error
                return response()->json(['error' => 'Failed to fetch data from the API'], $response->status());
            }
        }catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()]);
        }
        
    }
}