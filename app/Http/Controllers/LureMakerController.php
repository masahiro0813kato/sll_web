<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLureMakerRequest;
use App\Http\Requests\UpdateLureMakerRequest;
use Inertia\Inertia;
use App\Models\LureMaker;

class LureMakerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd(LureMaker::select('id', 'name_ja', 'name_en', 'image', 'is_visible')->get());

        return Inertia::render('LureMakers/Index', [
            'lureMakers' => LureMaker::select('id', 'lure_maker_name_ja', 'lure_maker_name_en', 'lure_maker_logo_image', 'is_available')->get()
        ]);
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
     * @param  \App\Http\Requests\StoreLureMakerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLureMakerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LureMaker  $lureMaker
     * @return \Illuminate\Http\Response
     */
    public function show(LureMaker $lureMaker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LureMaker  $lureMaker
     * @return \Illuminate\Http\Response
     */
    public function edit(LureMaker $lureMaker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLureMakerRequest  $request
     * @param  \App\Models\LureMaker  $lureMaker
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLureMakerRequest $request, LureMaker $lureMaker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LureMaker  $lureMaker
     * @return \Illuminate\Http\Response
     */
    public function destroy(LureMaker $lureMaker)
    {
        //
    }
}