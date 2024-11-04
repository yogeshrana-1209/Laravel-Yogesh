<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserResource extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo "This is Resource Controller <h1>Index Page !...........</h1>";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo "This is Resource Controller <h1>Create Page !........... </h1>";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo "This is Resource Controller <h1>Store Page !...........</h1>";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //echo "This is Resource Controller <h1>Show Page !...........</h1>";
        return "<h1>show method is called and ID is : . $id</h1>";  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        echo "This is Resource Controller <h1>Edit Page !...........ID is : . $id</h1></h1>";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        echo "This is Resource Controller <h1>Update Page !...........</h1>";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        echo "This is Resource Controller <h1>Destroy Page !...........</h1>";
    }
}
