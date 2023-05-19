<?php

namespace App\Http\Controllers;

use App\Models\hotel;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HotelController extends Controller
{

    public function index()
    {
        /* This code is retrieving all the hotel records from the database using the `all()` method of
       the `hotel` model and storing them in the `` variable. Then, it is rendering the
       "index" view for the hotels using the Inertia.js library and passing the `` variable
       to the view as a prop called "hoteles". This allows the Vue.js component in the view to
       access the hotel data and display it in a table or list format. */
        $hoteles = hotel::all();
        return Inertia::render('Hotels/index', ['hoteles' => $hoteles]);
    }


    public function create()
    {
        /* `return Inertia::render('Hotels/create');` is rendering the "create" view for the hotels. It
        is using the Inertia.js library to render a Vue.js component on the client-side. The view is
        passed to the component which contains a form for creating a new hotel record. The user can
        fill in the form fields such as the hotel name, city, rating, price per night, and image,
        and submit the form to create a new hotel record in the database. */
        return Inertia::render('Hotels/create');
    }

    public function store(Request $request)
    {
        /* This code is handling the creation of a new hotel record in the database. */
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
        /* This code is rendering the "show" view for a specific hotel. It is using the Inertia.js
        library to render a Vue.js component on the client-side. The view is passed a variable
        called "hotel" which contains the data for the specific hotel being shown. This data is used
        to populate the fields in the view, such as the hotel name, city, rating, price per night,
        and image. */
        return Inertia::render('Hotels/show', [
            'hotel' => $hotel
        ]);
    }


    public function update(Request $request)
    {
        /* This code is updating an existing hotel record in the database. It first finds the hotel
        record based on the ID passed in the request, then updates the record with the new values
        for the Name, City, Rating, Price_per_night, and Image fields. Finally, it saves the updated
        record to the database and redirects the user back to the index page for hotels. */
        $hotel = hotel::find($request->id);
        $hotel->Name = $request->Name;
        $hotel->City = $request->City;
        $hotel->Rating = $request->Rating;
        $hotel->Price_per_night = $request->Price_per_night;
        $hotel->Image = $request->Image;

        $hotel->save();
        return redirect()->route('hoteles.index');
    }



    public function destroy(hotel $hotel)
    {
        /* This code is deleting an existing hotel record from the database. It first finds the hotel
       record based on the ID passed in the request, then deletes the record from the database.
       Finally, it redirects the user back to the index page for hotels. */
        $hotel->delete();
        return redirect()->route('hoteles.index');
    }
}
