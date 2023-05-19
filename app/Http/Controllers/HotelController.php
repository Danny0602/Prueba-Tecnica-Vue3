<?php

namespace App\Http\Controllers;

use App\Models\hotel;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HotelController extends Controller
{
   
    public function index(){

        $hoteles = hotel::all();
        return Inertia::render('Hotels/index',['hoteles' => $hoteles]);
 
    }


    public function create(){
        return Inertia::render('Hotels/create');
    }

    public function store(Request $request){

        // $request->validate([
        //     'Name' => 'required',
        //     'Rating' => 'required',
        //     'City' => 'required',
        //     'Price_per_nigth' => 'required',
        //     'Image' => 'required',
        // ]);


        return redirect()->route('hoteles.index');
    }




}
