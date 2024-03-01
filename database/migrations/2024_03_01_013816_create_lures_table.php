<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lure_maker_id')->references('id')->on('lure_makers');
            $table->string('lure_name_ja');
            $table->string('lure_name_en');
            $table->string('lure_main_image');
            $table->string('lure_tmb_image');
            $table->string('attached_hook_size_1')->nullable;
            $table->string('attached_hook_size_2')->nullable;
            $table->string('attached_hook_size_3')->nullable;
            $table->string('attached_hook_size_4')->nullable;
            $table->string('attached_hook_size_5')->nullable;
            $table->string('attached_ring_size')->nullable;
            $table->string('lure_category')->nullable;
            $table->string('lure_buoyancy')->nullable;
            $table->string('lure_shape')->nullable;
            $table->string('lure_action')->nullable;
            $table->double('lure_length', 4, 1)->nullable;
            $table->double('lure_weight', 5, 2)->nullable;
            $table->double('lure_range_min', 5, 1)->nullable;
            $table->double('lure_range_max', 5, 1)->nullable;
            $table->string('lure_ref_url')->nullable;
            $table->string('target_fish_1')->nullable;
            $table->string('target_fish_2')->nullable;
            $table->string('target_fish_3')->nullable;
            $table->string('target_fish_4')->nullable;
            $table->string('target_fish_5')->nullable;
            $table->text('lure_infomation')->nullable;
            $table->boolean('is_available')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lures');
    }
};