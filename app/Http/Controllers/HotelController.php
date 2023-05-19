<?php

namespace App\Http\Controllers;

use App\Models\hotel;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HotelController extends Controller
{

    public function index()
    {

        $hoteles = hotel::all();
        return Inertia::render('Hotels/index', ['hoteles' => $hoteles]);
    }


    public function create()
    {
        return Inertia::render('Hotels/create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'Name' => 'required',
            'Rating' => 'required',
            'City' => 'required',
            'Price_per_night' => 'required',
            'Image' => 'required',
        ]);

        hotel::create([
            'Name' => $request->Name,
            'Rating' => $request->Rating,
            'City' => $request->City,
            'Price_per_night' => $request->Price_per_night,
            'Image' => $request->Image,
        ]);

        return redirect()->route('hoteles.index');
    }



    public function show(hotel $hotel)
    {

        return Inertia::render('Hotels/show', [
            'hotel' => $hotel
        ]);
    }


    public function update(Request $request)
    {
        $hotel = hotel::find($request->id);
        $hotel->Name = $request->Name;
        $hotel->City = $request->City;
        $hotel->Rating = $request->Rating;
        $hotel->Price_per_night = $request->Price_per_night;
        $hotel->Image = $request->Image;

        $hotel->save();
        return redirect()->route('hoteles.index');
    }
}
