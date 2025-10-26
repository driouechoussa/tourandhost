<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class Home extends Controller
{
    public function HomePageRendering(Request $request) {

  



        //Database Setup 
        $Random_Products = Products::inRandomOrder()->limit(4)->get();
        $product_image = Products::with('firstImage')->get();

         $guests = [
            '1',
            '2',
            '3',
            '4',
            '5',
            '7+',
        ];


        return view('home',
            [
                'products' => $Random_Products,
                'guests' => $guests
            ]
        );
    }
}
