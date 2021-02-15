<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Photographer;
use App\Models\Gallery;

class PhotographerController extends Controller
{
    public function index(Request $request)
    {
        $photographerId =  $request->photographer_id ?? rand(1, 20);
        $photographer = Photographer::find(2)->with('gallerys')->where('id', $photographerId)->get(); //->toArray();
        return $photographer;
    }
}
