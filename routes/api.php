<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\LureMaker;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:sanctum')->get('/searchLures', function (Request $request) {
    $request = $request->search;

    if (!empty($request)) {
        if (LureMaker::join('lures', 'lure_makers.id', '=', 'lures.lure_maker_id')
            ->where('lure_maker_name_ja', 'like', '%' . $request . '%')
            ->orWhere('lure_maker_name_en', 'like', '%' . $request . '%')
            ->orWhere('lure_name_ja', 'like', '%' . $request . '%')
            ->orWhere('lure_name_en', 'like', '%' . $request . '%')
            ->exists()
        ) {
            return LureMaker::join('lures', 'lure_makers.id', '=', 'lures.lure_maker_id')
                ->where('lure_maker_name_ja', 'like', '%' . $request . '%')
                ->orWhere('lure_maker_name_en', 'like', '%' . $request . '%')
                ->orWhere('lure_name_ja', 'like', '%' . $request . '%')
                ->orWhere('lure_name_en', 'like', '%' . $request . '%')
                ->select('lures.id', 'lure_maker_name_en', 'lure_name_ja')
                ->orderBy('lure_name_ja', 'ASC')
                ->take(5)
                ->get();
        }
    }
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
