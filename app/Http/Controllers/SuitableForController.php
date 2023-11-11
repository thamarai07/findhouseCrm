<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuitableFor;

class SuitableForController extends Controller
{

    public function store(Request $request){
        $post = new SuitableFor;
        $post->suitable_for = $request->suitable_fors;
        $post->save();
        return redirect('suitable_for')->with('status', 'Suitable For Value Has Been inserted');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
