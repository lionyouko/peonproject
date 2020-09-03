<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class EquipmentsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //Lion: We can only see this page if user is authenticated
        $this->middleware('auth');
    }

    public function create()
    {
        return view('services/equipment/create');
    }

    public function store()
    {
        $data = request()->validate([
        ]);

        //Lion: we have to use dot there to concatenate correctly
        return redirect('/profile/'.auth()->user()->id);
    }

    public function index(User $user)
    {
        return view('services.equipment.index', compact('user'));
    }
}
