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
        Schema::create('air_ways', function (Blueprint $table) {
            $table->id();
            $table->string('shipper_name_address')->nullable();
            $table->string('shipper_account_number')->nullable();
            $table->string('issued_by')->nullable();
            $table->string('consignee_name_address')->nullable();
            $table->string('issuing_carrier')->nullable();
            $table->string('accounting_information')->nullable();
            $table->string('agents_iata_cd')->nullable();
            $table->string('account_no')->nullable();
            $table->string('airport_of_departure')->nullable();
            $table->string('to')->nullable();
            $table->string('by_first_carrier')->nullable();
            $table->string('to_2')->nullable();
            $table->string('by')->nullable();
            $table->string('to_3')->nullable();
            $table->string('by_2')->nullable();
            $table->string('currency')->nullable();
            $table->string('chos_cd')->nullable();
            $table->string('wtnal_pdd')->nullable();
            $table->string('wtnal_coll')->nullable();
            $table->string('qnay_pdd')->nullable();
            $table->string('qnay_coll')->nullable();
            $table->string('declared_carriage')->nullable();
            $table->string('declared_costums')->nullable();
            $table->string('airport_of_destination')->nullable();
            $table->string('start_flight_date')->nullable();
            $table->string('end_flight_date')->nullable();
            $table->string('amount_of_insurance')->nullable();
            $table->string('handling_information')->nullable();
            $table->string('no_of_pieces')->nullable();
            $table->string('gross_weight')->nullable();
            $table->string('kglg')->nullable();
            $table->string('commodity_item')->nullable();
            $table->string('chargeable_weight')->nullable();
            $table->string('rate_charge')->nullable();
            $table->string('total')->nullable();
            $table->string('nature_and_qty')->nullable();
            $table->string('prepaid')->nullable();
            $table->string('collect')->nullable();
            $table->string('start_valuation_charge')->nullable();
            $table->string('end_valuation_charge')->nullable();
            $table->string('start_tax')->nullable();
            $table->string('end_tax')->nullable();
            $table->string('start_total_charge_agent')->nullable();
            $table->string('end_total_charge_agent')->nullable();
            $table->string('start_total_charge_carrier')->nullable();
            $table->string('end_total_charge_carrier')->nullable();
            $table->string('total_repaid')->nullable();
            $table->string('total_collect')->nullable();
            $table->string('charges_desti')->nullable();
            $table->string('other_charges')->nullable();
            $table->string('total_collect_charges')->nullable();
            $table->string('executed_date')->nullable();
            $table->string('at_place')->nullable();
            $table->string('signature_of_shipper')->nullable();
            $table->string('signature_of_issue')->nullable();
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
        Schema::dropIfExists('air_ways');
    }
};
