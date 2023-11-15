<?php

namespace App\Http\Controllers;
use Illuminate\App\Models\Archive;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Perform the search on your model
        $results = \App\Models\Archive::where('keywords', 'LIKE', '%' . $query . '%')->get();

        return view('search', ['results' => $results]);
    }
}
