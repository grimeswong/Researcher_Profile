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
        return view('main');
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
        'firstname' =>'required|min:1|max:255',
        'lastname' =>'required|max:255',
        'position' =>'required|max:255',
        'email'=>'required|email|max:255|unique:users',
        'image' => 'image|max:255' // image
      ]);

      $image_path = request()->file('image')->store('researcher_images', 'public');
      $researcher = new Researcher();
      $researcher->firstName = $request->firstName;
      $researcher->lastName = $request->lastName;
      $researcher->position = $request->position;
      $researcher->email = $request->email;
      $researcher->biography = $request->biography;
      $researcher->image = $image_path;

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
