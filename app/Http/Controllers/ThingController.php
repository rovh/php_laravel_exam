<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thing;
use phpDocumentor\Reflection\PseudoTypes\True_;

class ThingController extends Controller
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
    public function create(Request $request)
    {
        $thingObject = Thing::create([
            'name' => request('name'),
            'description' => request('description'),
            'master' => request('master'),
            'wrnt' => request('wrnt'),
            ]);
        return $thingObject;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        // $name = $request->get("name");
        // $thingObject = Thing::create([$name]);
        // return 'thingObject';
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
        $name = $request->get('name');
        $value = $request->get('new');

        $findObject = Thing::where('id', '=', $id)->update([$name => $value]);
        
        if ($findObject == FALSE){
            return 'Not found';
        }
        else{
            return 'Was updated';
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $findObject = Thing::where('id', '=', $id)->delete();
  
        if ($findObject == FALSE){
            return 'Not found';
        }
        else{
            return 'Was deleted';
        }

    }
}
