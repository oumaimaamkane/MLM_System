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
        Schema::create('upgrades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pack_id')->nullable()->default(null);
            $table->string('name');
            $table->integer('members');
            $table->decimal('amount');
            $table->float('percentage')->nullable();
            $table->timestamps();

            
            $table->foreign('pack_id')->references('id')->on('packs')->onUpdate('cascade')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('upgrades');
    }
};
