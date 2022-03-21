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
        Schema::table('air_ways', function (Blueprint $table) {
            //
            $table->string('cc_charges')->nullable();
            $table->string('current_conversion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('air_ways', function (Blueprint $table) {
            Schema::dropIfExists('cc_charges');
            Schema::dropIfExists('current_conversion');
        });
    }
};
