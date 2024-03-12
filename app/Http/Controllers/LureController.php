<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLureRequest;
use App\Http\Requests\UpdateLureRequest;
use Inertia\Inertia;
use App\Models\Lure;
use App\Models\LureMaker;
use Illuminate\Http\Request;

class LureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $request = $request->search;


        if (!empty($request)) {
            $lures = LureMaker::join('lures', 'lure_makers.id', '=', 'lures.lure_maker_id')
                ->where('lure_maker_name_ja', 'like', '%' . $request . '%')
                ->orWhere('lure_maker_name_en', 'like', '%' . $request . '%')
                ->orWhere('lure_name_ja', 'like', '%' . $request . '%')
                ->orWhere('lure_name_en', 'like', '%' . $request . '%')
                ->select(
                    'lures.id',
                    'lure_maker_name_ja',
                    'lure_maker_name_en',
                    'lure_name_ja',
                    'lure_name_en',
                    'lure_tmb_image',
                    'attached_hook_size_1',
                    'attached_hook_size_2',
                    'attached_hook_size_3',
                    'attached_hook_size_4',
                    'attached_hook_size_5',
                    'attached_ring_size',
                )
                ->get();

            return Inertia::render('Lures/Index', [
                'lures' => $lures,
                'searchWord' => $request
            ]);
        } else {
            $lures = LureMaker::join('lures', 'lure_makers.id', '=', 'lures.lure_maker_id')
                ->select(
                    'lures.id',
                    'lure_maker_name_ja',
                    'lure_maker_name_en',
                    'lure_name_ja',
                    'lure_name_en',
                    'lure_tmb_image',
                    'attached_hook_size_1',
                    'attached_hook_size_2',
                    'attached_hook_size_3',
                    'attached_hook_size_4',
                    'attached_hook_size_5',
                    'attached_ring_size',
                )
                ->get();

            return Inertia::render('Lures/Index', [
                'lures' => $lures,
                'searchWord' => $request
            ]);
        }

        /*return Inertia::render(
            'Lures/Index'
        );*/
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
        $lure_maker = LureMaker::where('id', $lure->lure_maker_id)->get();
        //dd($lure_maker);

        return Inertia::render('Lures/Show', ['lure' => $lure, 'lure_maker' => $lure_maker]);
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