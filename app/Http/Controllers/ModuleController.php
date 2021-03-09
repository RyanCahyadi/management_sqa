<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $moduls = Module::all();   
        return view('module.index', compact('moduls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('module.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $modul = Module::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return response()->json([
            'message' => "Success create data",
            'data' => $modul
        ]);
    }

    public function getAll()
    {
        $modul = Module::all();
        return response()->json([
            'code' => 200,
            'message' => 'Success get data',
            'data' => $modul
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        $modul = Module::findOrFail($id)->update([
            'name'  => $request->name,
            'description' => $request->description
        ]);
        return response()->json([
            'message' => 'Success update data',
            'data' => $modul
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modul = Module::find($id)->delete();
        return response()->json([
            'message' => 'Success delete data',
            'data' => $modul
        ]);
    }
}
