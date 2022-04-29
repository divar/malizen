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
        Schema::create('neighborhood_association_residents', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('resident_id');
            $table->unsignedInteger('neighborhood_association_id');
            $table->string('status');
            $table->dateTime('moved_in')->nullable();
            $table->dateTime('moved_out')->nullable();
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
        Schema::dropIfExists('neighborhood_association_residents');
    }
};
