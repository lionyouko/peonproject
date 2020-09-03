<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class EmailsController extends Controller
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
        return view('services/email/create');
    }

    public function store()
    {
        $data = request()->validate([
            //Lion: Verify this syntax to see if it works
            'subdomain'=>'required_if:address,==,""',

        ]);

        auth()->user()->emails()->create([
            'subdomain' => $data['subdomain'],
            'address' => $data['address'],
            'description' => $data['description'],
            'is_ready' => false,
        ]);
        //Lion: we have to use dot there to concatenate correctly
        return redirect('/profile/'.auth()->user()->id);
    }

    public function index(User $user)
    {
        return view('services.email.index', compact('user'));
    }
}
