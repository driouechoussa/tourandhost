<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\About;
use App\Http\Controllers\Residences;
use App\Http\Controllers\Contact;
use App\Http\Controllers\Locale;
use App\Http\Controllers\Product;





Route::get('/', [Home::class, 'HomePageRendering'])->name('HomePage');

Route::get('/appartments/{id}' , [Product::class , 'ProductPage'])->name('ProductPage');
Route::post('/booked' , [Product::class , 'Booking'])->name('Booking');

Route::get('/about' , [About::class , 'AboutPage'])->name('AboutPage');

Route::get('/residences' , [Residences::class , 'ResidencesPage'])->name('ResidencesPage');


Route::get('/contact' , [Contact::class , 'ContactPage'])->name('ContactPage');
Route::post('/email_sent' , [Contact::class , 'Send'])->name('Contact.Send');


Route::get('/{local}' , [Locale::class , 'LangChanger'])->name('LangChanger');



