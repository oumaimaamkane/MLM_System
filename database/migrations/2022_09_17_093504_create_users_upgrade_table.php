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
        Schema::create('users_upgrade', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable()->default(null);
            $table->unsignedBigInteger('upgrade_id')->nullable()->default(null);
            $table->set('status', ['Pas encore traité', 'Traité'])->default('Pas encore traité');
            $table->timestamps();

            //foreign Keys
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null'); 
            $table->foreign('upgrade_id')->references('id')->on('upgrades')->onUpdate('cascade')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_upgrade');
    }
};
