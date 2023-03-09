<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotableRelationsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('text')->nullable();
            $table->morphs('commentable');
            $table->timestamps();
        });

        Schema::create('recommendables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('text')->nullable();
            $table->morphs('recommendable');
            $table->bigInteger('recommend_id');
            $table->timestamps();
        });

        Schema::create('billables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('text')->nullable();
            $table->morphs('billable');
            $table->bigInteger('bill_id');
            $table->timestamps();
        });

        Schema::create('articles_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('article_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('notes');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->nullableTimestamps();
        });

        Schema::create('recommends', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->timestamps();
        });

        Schema::create('bills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->timestamps();
        });

        Schema::create('stars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('starable_type');
            $table->bigInteger('starable_id');
            $table->string('title')->nullable();
        });

        Schema::create('universes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->string('title')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
        });

        Schema::create('planets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->nullable();
            $table->string('title')->nullable();
        });

        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->bigInteger('user_id');
            $table->string('label')->nullable();
            $table->bigInteger('amount');
            $table->string('type');
        });

        Schema::create('planets_non_nullable', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->string('title')->nullable();
        });

        Schema::create('comets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->default(0);
        });

        Schema::create('bangs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
        });

        Schema::create('account_details_bang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('account_details_id');
            $table->bigInteger('bang_id');
        });

        Schema::create('account_details_bangs_pivot', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('account_details_id');
            $table->bigInteger('bang_id');
            $table->string('pivot_field');
        });
    }

    public function down()
    {
        Schema::dropIfExists('recommendables');
        Schema::dropIfExists('comments');
        Schema::dropIfExists('recommends');
        Schema::dropIfExists('stars');
        Schema::dropIfExists('billables');
        Schema::dropIfExists('bills');
        Schema::dropIfExists('articles_users');
        Schema::dropIfExists('planets');
        Schema::dropIfExists('universes');
        Schema::dropIfExists('comets');
        Schema::dropIfExists('account_details_bang');
        Schema::dropIfExists('bangs');
        Schema::dropIfExists('account_details_bangs_pivot');
    }
}
