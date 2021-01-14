<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ESUSER;
class TestController extends Controller
{

    public function index()
    {

        $data = ESUSER::get();
       // dd($data);
        // $data = ESUSER::update();
        // $data = ESUSER::save();
        // $data = ESUSER::delete();

       return view('welcome', compact('data'));
    }

    public function create()
    {

        return view('create');
    }

    public function store(Request $request)
    {
     //  dd($request->all());
     $storeData = new ESUSER;

     $storeData->name = $request->name;
     $storeData->email = $request->email;
     $storeData->phone = $request->phone;
     $storeData->save();
    }
}
