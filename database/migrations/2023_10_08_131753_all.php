<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
       
        Schema::create('all',function(Blueprint $table){

            $table->bigIncrements('id');
            $table->bigInteger('votes');
            $table->binary('img');
            $table->boolean('confirmed');
            $table->char('name', 50);
            $table->dateTimeTz('created_at');
            $table->ipAddress('visitor');
            $table->longText('description');
            $table->string('city', 1000);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
