<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class VpnsController extends Controller
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
        return view('services/vpn/create');
    }

    public function store()
    {
        $data = request()->validate([
            'caption'=>'required',
            //Lion: works too: 'image'=>'required|image ',
            'image' => ['required', 'image']
        ]);

        $imagePath = request('image')->store('store', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
        $image ->save();
        //auth()->user()->posts()->create($data);
        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);
        //Lion: we have to use dot there to concatenate correctly
        return redirect('/profile/'.auth()->user()->id);
    }

    public function index(User $user)
    {
        return view('services.vpn.index', compact('user'));
    }
}
