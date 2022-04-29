<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residents', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('neighborhood_association_id');
            $table->unsignedInteger('religion_id')->nullable();
            $table->unsignedInteger('profession_id')->nullable();
            $table->string('nik');
            $table->string('kk');
            $table->string('name');
            $table->string('birth_place')->nullable();
            $table->string('nationality')->default('indonesia');
            $table->date('birth_date')->nullable();
            $table->string('address')->nullable();
            $table->string('ethnic')->nullable();
            $table->string('language')->nullable();
            $table->string('married_status');
            $table->string('profession_status')->nullable();
            $table->text('daily_activity')->nullable();
            $table->string('home_ownership')->nullable();
            $table->string('relationship_with_head_of_family')->nullable();
            $table->boolean('is_head_of_family')->default(false);
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
        Schema::dropIfExists('residents');
    }
};
