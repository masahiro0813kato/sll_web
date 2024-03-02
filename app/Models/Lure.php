<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LureMaker;

class Lure extends Model
{
    use HasFactory;

    /*protected $fillable = [
        'lure_name_ja',
        'lure_name_en',
        'lure_main_image',
        'lure_tmb_image',
        'attached_hook_size_1',
        'attached_hook_size_2',
        'attached_hook_size_3',
        'attached_hook_size_4',
        'attached_hook_size_5',
        'attached_ring_size',
        'lure_category',
        'lure_buoyancy',
        'lure_shape',
        'lure_action',
        'lure_length',
        'lure_weight',
        'lure_range_min',
        'lure_range_max',
        'lure_ref_url',
        'target_fish_1',
        'target_fish_2',
        'target_fish_3',
        'target_fish_4',
        'target_fish_5',
        'lure_infomation',
        'is_available',
    ];*/


    public function lureMakers()
    {
        return $this->belongsTo(LureMaker::class, 'lure_maker_id');
    }
}
