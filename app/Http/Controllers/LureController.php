<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLureRequest;
use App\Http\Requests\UpdateLureRequest;
use Inertia\Inertia;
use App\Models\Lure;
use App\Models\LureMaker;

class LureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $lures = LureMaker::join('lures', 'lure_makers.id', '=', 'lures.lure_maker_id')
            ->select(
                'lures.id',
                'lure_maker_name_en',
                'lures.lure_name_ja',
                'lures.lure_name_en',
                'lures.lure_tmb_image',
                'lures.attached_hook_size_1',
                'lures.attached_hook_size_2',
                'lures.attached_hook_size_3',
                'lures.attached_hook_size_4',
                'lures.attached_hook_size_5',
                'lures.attached_ring_size',
            )->where('lures.is_available', true)->get();

        return Inertia::render('Lures/Index', [
            'lures' => $lures
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
     * @param  \App\Http\Requests\StoreLureRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLureRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lure  $lure
     * @return \Illuminate\Http\Response
     */
    public function show(Lure $lure)
    {
        return Inertia::render('Lures/Show', [
            'lures' => Lure::select(
                'id',
                'name_ja',
                'name_en',
                'image_main',
                'image_tmb',
                'hook_size_1',
                'hook_size_2',
                'hook_size_3',
                'hook_size_4',
                'hook_size_5',
                'ring_size',
                'type',
                'type_buoyancy',
                'type_action',
                'action',
                'length',
                'weight',
                'range_min',
                'range_max',
                'org_url',
                'infomation',
                'is_visible',
            )->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lure  $lure
     * @return \Illuminate\Http\Response
     */
    public function edit(Lure $lure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLureRequest  $request
     * @param  \App\Models\Lure  $lure
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLureRequest $request, Lure $lure)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lure  $lure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lure $lure)
    {
        //
    }
}