<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller

{
    public function index()
    {
        return view('show');
    }
    /*
    //Method b
    public function show($id)
    {
        return view  ('events.show');
    }*/
    //Method c
    /*
   public function show($controller,$subcontroller)
   {
       dd("Controller: {$controller} SubController: {$subcontroller}");
   }*/
}


