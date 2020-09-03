<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SubdomainaccessController extends Controller
{


    public function create()
    {
        return view('services/subdomainaccess/create');
    }

    public function store()
    {
        $data = request()->validate([
            'address'=>'required|email',
        ]);

        auth()->user()->subdomainaccess()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);
        //Lion: we have to use dot there to concatenate correctly
        return redirect('/profile/'.auth()->user()->id);
    }

    public function index(User $user)
    {
        return view('services.subdomainaccess.index', compact('user'));
    }
}
