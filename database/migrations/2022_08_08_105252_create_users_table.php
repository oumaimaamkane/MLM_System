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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('parent_id')->nullable()->default(null);
            $table->unsignedBigInteger('pack_id')->nullable()->default(null);
            $table->unsignedBigInteger('upgrade_id')->nullable()->default(null);
            $table->unsignedBigInteger('level_id')->nullable()->default(null);
            $table->string('reference', 50)->unique();
            $table->string('cin', 10)->nullable()->unique();
            $table->string('firstname', 30);
            $table->string('lastname', 30);
            $table->string('email', 50)->unique();
            $table->string('phone', 20)->nullable();
            $table->string('city', 50)->nullable();
            $table->string('address', 50)->nullable();
            $table->set('gender', ['Male', 'Female'])->nullable();
            $table->string('bank', 50)->nullable();
            $table->string('rib', 50)->nullable();
            $table->string('avatar', 160)->nullable();
            $table->string('password')->nullable();
            $table->set('status', ['Active', 'Desactive'])->default('Desactive');
            $table->set('is_admin', ['1', '0'])->default('0');
            $table->timestamp('email_verified_at')->nullable(); 
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

            //foreign Keys
            $table->foreign('parent_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null'); 
            $table->foreign('pack_id')->references('id')->on('packs')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('level_id')->references('id')->on('levels')->onUpdate('cascade')->onDelete('set null'); 
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
        Schema::dropIfExists('users');
    }
};
