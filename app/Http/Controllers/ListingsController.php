<?php

namespace App\Http\Controllers;

use App\Listing;
use Illuminate\Http\Request;
use App\User;

class ListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);

    }
    public function index()
    {

        $listings=Listing::all();
        return view('dashboard')->with('listings',$listings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('createListing');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'website'=>'required',
            'phone'=>'required',
            'bio'=>'required'
        ]);

        Listing::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'website'=>$request->website,
            'phone'=>$request->phone,
            'bio'=>$request->bio,
            'user_id'=>auth()->user()->id
        ]);
        return redirect(route('listings.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Listing $listing)
    {
        return view('show')->with('listing',$listing);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Listing $listing)
    {
        return view('editForm')->with('listing',$listing);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Listing $listing)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'website'=>'required',
            'phone'=>'required',
            'bio'=>'required'
        ]);

        $listing->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'website'=>$request->website,
            'phone'=>$request->phone,
            'bio'=>$request->bio,
            'user_id'=>auth()->user()->id
        ]);
        return redirect(route('listings.index'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listing $listing)
    {
        $listing->delete();
        return redirect(route('listings.index'));



    }
}
