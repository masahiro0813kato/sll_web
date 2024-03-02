<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LureMaker extends Model
{
    use HasFactory;

    protected $fillable = [
        'lure_maker_name_ja',
        'lure_maker_name_en',
        'lure_maker_logo_image',
        'lure_maker_ref_url',
        'is_available'
    ];

    public function lures()
    {
        return $this->hasMany(Lure::class);
    }
}
