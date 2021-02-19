<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\Animal;

class IndexController extends Controller
{
    // public function index()
    // {
    //     $owner = Owner::where('', '')->get();

    // }

    public function show($id)
    {
        $owner = Owner::find($id);
        $pets = Animal::where('owner_id', $id)->get();
        return view('vet_clinic.pet', compact(['pets', 'owner']));
    }
}


