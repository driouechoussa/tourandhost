<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class Residences extends Controller
{

    function ResidencesPage(Request $request) {

        $productChecked = collect();
        $product_image = Products::with('firstImage')->get();
        

        //filter mode
        $product_data = $request->only([
            'guests',
            'type',
            'checkout',
            'checkin'
        ]);


        $productChecked = Products::inRandomOrder()->limit(4)->get();
        


        return view('residences',
        [
            'products' => $productChecked,
            'DataFiltred' => $product_data
        ]
        );
    }
}
