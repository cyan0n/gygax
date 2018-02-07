<?php

namespace App\Http\Controllers;

use App\Map;
use App\Module;
use Illuminate\Http\Request;

class MapController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Module $module)
    {
        return view('map.create', compact('module'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Module $module, Request $request)
    {
        $this->validate(request(), [
            'name' => 'required'
        ]);
        $id = $module->maps()->create(request()->all())->id;
        // Save file
        $request->file('map')->storeAs('maps/', $id, 'public');
        // TODO: redirect map.edit
        return redirect()->action('MapController@edit', $module, $map);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Map  $map
     * @return \Illuminate\Http\Response
     */
    public function show(Module $module, Map $map)
    {
        //
        return view('map.edit', compact('map', 'module'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Map  $map
     * @return \Illuminate\Http\Response
     */
    public function edit(Module $module, Map $map)
    {
        return view('map.edit', compact('map', 'module'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Map  $map
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Map $map)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Map  $map
     * @return \Illuminate\Http\Response
     */
    public function destroy(Map $map)
    {
        //
    }
}
