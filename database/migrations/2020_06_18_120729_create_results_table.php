<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();

            $table->string('car_less_than_3km')->nullable();
            $table->string('car_three_to_ten')->nullable();
            $table->string('car_greater_than_10')->nullable();

            $table->string('own_bike')->nullable();

            $table->string('bike_trips')->nullable();
            $table->string('bike_kms')->nullable();

            $table->string('public_transport_trips')->nullable();
            $table->string('public_transport_kms')->nullable();

            $table->string('rideshare_trips')->nullable();
            $table->string('rideshare_kms')->nullable();

            $table->string('carshare')->nullable();

            $table->string('plastic_bins')->nullable();
            $table->string('glass_bins')->nullable();
            $table->string('paper_cardboard_bins')->nullable();
            $table->string('landfill_bins')->nullable();

            $table->string('elec_kw')->nullable();
            $table->string('elec_supplier')->nullable();
            $table->string('smart_meter')->nullable();
            $table->string('gas_kw')->nullable();
            $table->string('gas_supplier')->nullable();
            $table->string('woodburner')->nullable();
            $table->string('burn_material')->nullable();

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
        //
    }
}
