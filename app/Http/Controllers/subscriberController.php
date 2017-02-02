<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\subscriberRequest;

use App\subscriber;



class subscriberController extends Controller
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
    public function store(subscriberRequest $request)
    {
        $data = new subscriber();

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->password = $request->Credential;

        $data->save();


        return redirect()->back();
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('subscriber');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)

    {
        $m = $request->id;
        $d = subscriber::all();
        $d->find($m)->delete();

        echo 'Your record is deleted';
        
    }

    public function editMyRecord(){
        return view('update');
        
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
