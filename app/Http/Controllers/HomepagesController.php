<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class HomepagesController extends Controller
{
//    /**
//     * Create a new controller instance.
//     *
//     * @return void
//     */
//    public function __construct()
//    {
//        //Lion: We can only see this page if user is authenticated
//        $this->middleware('auth');
//    }

    public function create()
    {
        return view('/services/homepage/create');
    }

    public function store()
    {
        $data = request()->validate([
        ]);

        auth()->user()->homepages()->create([
            //Lion: Verificar esse username se é o desejado
            'address' => "http://homepages.di.fc.ul.pt/~" . auth()->user()->username,
            'description' => $data['description'],
            'is_ready' => false,
        ]);
        //Lion: we have to use dot there to concatenate correctly
        return redirect('/profile/'.auth()->user()->id);
    }

    public function index(User $user)
    {
        return view('services.homepage.index', compact('user'));
    }
}
