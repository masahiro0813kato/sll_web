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
        Schema::create('lure_makers', function (Blueprint $table) {
            $table->id();
            $table->string('lure_maker_name_ja');
            $table->string('lure_maker_name_en');
            $table->string('lure_maker_logo_image')->nullable;
            $table->string('lure_maker_ref_url')->nullable;
            $table->boolean('is_available')->default(true);;
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
        Schema::dropIfExists('lure_makers');
    }
};