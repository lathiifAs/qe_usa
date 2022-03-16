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
        Schema::create('quality_expresses', function (Blueprint $table) {
            $table->id();
            $table->string('shipper_exporter');
            $table->string('export_references');
            $table->string('bill_of_lading_no');
            $table->string('fmc_no');
            $table->string('no_of_original_signed');
            $table->string('consignee');
            $table->string('for_delivery');
            $table->string('notifi_party');
            $table->string('also_notify');
            $table->string('vessel_voy');
            $table->string('part_of_loading');
            $table->string('pier_or_place');
            $table->string('type_of_move');
            $table->string('port_of_discharge');
            $table->string('place_of_delivery');
            $table->string('final_destination');
            $table->string('container_no');
            $table->string('seal_no');
            $table->string('no_of_pkgs');
            $table->string('kind_of_pkgs');
            $table->string('total_gross_weight');
            $table->string('total_measur');
            $table->string('total_no_pkgs');
            $table->string('freight_and_charges');
            $table->string('repaid_collect');
            $table->string('place_and_date_issue');
            $table->string('by');
            $table->string('as_agent');
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
        Schema::dropIfExists('quality_expresses');
    }
};
