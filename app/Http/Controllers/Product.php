<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingMailContact;

class Product extends Controller
{
     function ProductPage($id) {
        $products = Products::findOrFail($id);

        $Product_Images = Products::With('product_items')->findOrFail($id);

        return view('product',
            [
                'product_details' => $products,
                'product_images' => $Product_Images
            ]
        );
    }

    public function Booking(Request $request) {
        $booking_data = $request->validate(
            [
                'fullname' => 'required|max:100',
                'email' => 'required|max:100',
                'phone' => 'required|max:15',
                'guests' => 'required',
                'checkin-date' => 'required',
                'checkout-date' => 'required'
            ]
        );

        Mail::to(env('MAIL_FROM_ADDRESS', env('CONTACT_EMAIL')))
            ->send(new BookingMailContact($booking_data));

        return redirect()->back()->with('success', '');
    }
}
