<?php

namespace App\Http\Controllers;

use App\Module;
use App\Map;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display the module list and button to create.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all modules
        $modules = Module::all();

        return view('module.index', compact('modules'));
    }

    /**
     * Show the form for creating a new module.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('module.create');
    }

    /**
     * Store a newly created module in database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required'
        ]);
        Module::create(request()->all());
        return redirect('/');
    }

    /**
     * Display the map list and button to create.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function show(Module $module)
    {
        // Get all maps of module
        $maps = $module->maps;

        return view('map.index', compact('maps', 'module'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function edit(Module $module)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Module $module)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function destroy(Module $module)
    {
        //
    }
}
