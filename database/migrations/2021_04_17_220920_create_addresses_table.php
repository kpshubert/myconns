<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('street1', 150)->nullable();
            $table->string('street2', 150)->nulable();
            $table->string('city', 150);
            $table->string('st', 2);
            $table->string('zip', 5)->nullable();
            $table->string('county', 150)->nullable();
            $table->string('country', 150);
            $table->string('owner', 36);
            $table->datetime('effectivedate')->nullable();
            $table->datetime('enddate')->nullable();
            $table->unsignedinteger('highestcircle')->default(0); // 0 = "just me"
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
        Schema::dropIfExists('addresses');
    }
}
