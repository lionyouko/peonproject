<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class VmsController extends Controller
{

    public function create()
    {
        return view('services/vm/create');
    }

    public function store()
    {
        $data = request()->validate([
            'ram'=>'required',
            'hdd'=>'required',
            'name'=>'required',
            'os'=>'required',
        ]);


        //Lion: Important: first create the vm, then use to add it to a file

        auth()->user()->vms()->create([
            'name' => $data['name'],
            'ram' => $data['ram'],
            'hdd' => $data['hdd'],
            'os' => $data['os'],

        ]);


        $path = "/storage/app/vmrequests/". auth()->user()->id .
            "_" . auth()->user()->username .
            "/VM" . auth()->user()->vms()->lastest()->id . ".json";
        $JSONvm = File::put($path,request()->json());
        //Lion: we have to use dot there to concatenate correctly
        return redirect('/profile/'.auth()->user()->id);
    }

    public function index(User $user)
    {
        return view('services.vm.index', compact('user'));
    }
}
