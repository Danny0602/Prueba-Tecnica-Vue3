<?php

namespace App\Http\Controllers\APi;

use App\Models\hotel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HotelController extends Controller
{


    public function destroy($id)
    {
        /* This code is deleting a record from the "hotel" table in the database based on the provided
        ``. It first tries to find the record with the given `` using the `find()` method of
        the `hotel` model. If the record is not found, it returns a JSON response with an error
        message and a 404 status code. If the record is found, it deletes the record using the
        `delete()` method of the `` object and returns a JSON response with a success message. */
        $hotel = hotel::find($id);
        if (!$hotel) {
            return response()->json(['error' => 'Registro no encontrado'], 404);
        }
        $hotel->delete();
        return response()->json(['message' => 'Registro eliminado correctamente']);
    }


  
    public function getHoteles()
    {
        /* This code is retrieving all the records from the "hotel" table in the database using the
        `all()` method of the `hotel` model. Then, it is returning a JSON response with the
        retrieved records using the `json()` method of the `response()` function. */
        $posts = hotel::all();
        return response()->json($posts);
    }
}
