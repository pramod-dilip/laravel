<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Sale;

use Session;

use Illuminate\Support\Facades\Auth;

class SaleController extends Controller

{

//This __construct() function will check authentication with middleware 'auth' before opening this controller

// public function __construct()
// {
//     $this->middleware('auth');
// }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Sale::all();

        return view('sale.index')->with('data', $data);

        // echo 'Raghav';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sale.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = array(

        'name'  =>  'required|min:5|alpha',
        'mobile'    =>  'required|min:10',
        'email' =>  'required',
        'password'  =>  'required|min:8'

        );


        $validator = \Validator::make($request->all(), $rules);

        $insert = new Sale($request->all());

        $insert->password = bcrypt($request->password);

        if($validator->fails())
        return redirect('sale/create')->withErrors($validator)
    ->withInput();
        

        $insert->save();

        

        // Sale::create($insert);

        Session::flash('message', 'Your Record has been inserted');

        // return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        if($id == Auth::user()->id) {       
        $texts = Sale::findOrFail($id);

        return view('sale.show', compact('texts'));
    }

    else{
        

        return redirect()->route('sale.index')
                        ->with('pramod','Sales Person updated successfully');
    }
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $salePersons = sale::find($id);
        return view('sale/edit', compact('salePersons'));
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
        sale::find($id)->update($request->all());
        return redirect()->route('sale.index')
                        ->with('success','Sales Person updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $manager = sale::find($id);
        $manager->delete();

        return redirect()->route('sale.index')
                        ->with('success','Sales Person updated successfully');

    }

}
