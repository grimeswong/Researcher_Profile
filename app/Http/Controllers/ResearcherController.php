<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Researcher;

class ResearcherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    /** Input validation **/
    $this->validate($request, [
      'firstName' =>'required|max:63',
      'lastName' =>'required|max:63',
      'position' =>'required|max:127',
      'email'=>'required|email|max:63|unique:users',
      'biography'=>'required|max:1023',
      'image' => 'image|max:255' // image
    ]);


    $researcher = new Researcher();
    $researcher->firstName = $request->firstName;
    $researcher->lastName = $request->lastName;
    $researcher->position = $request->position;
    $researcher->email = $request->email;
    $researcher->biography = $request->biography;

    if(request()->file('image') != null) {
      $image_path = request()->file('image')->store('researcher_images', 'public');
      // dd($image_path);
      $researcher->image = $image_path;
    }


    return view('profile')->with('firstname', $researcher->firstName)->with('lastname', $researcher->lastName)->with('position', $researcher->position)->with('email', $researcher->email)->with('biography', $researcher->biography)->with('image', $researcher->image);
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
