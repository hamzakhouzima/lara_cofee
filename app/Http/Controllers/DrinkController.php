<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drink;

class DrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $drinks =  Drink::all();

       return view('dashboard',compact('drinks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $drink = new Drink() ;

        $drink->category = request('category');
        $drink->drink = request('drink');
        $drink->size = request('size');
        $drink->price = request('price');

  
        $drink->save();

        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Drink $drinks)
    {
        //return the edit view 
        // $drink = new Drink();
      
        return view('edit',compact('drinks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        //write the update logic 
        $drink = Drink::find($id);

        $drink->category = request('ucategory');
        $drink->drink = request('udrink');
        $drink->size = request('usize');
        $drink->price = request('uprice');

  
        $drink->save();

        return redirect('dashboard');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //*
        $data = Drink::find($id);

        $data -> delete();

        return redirect('dashboard');
    }
}
