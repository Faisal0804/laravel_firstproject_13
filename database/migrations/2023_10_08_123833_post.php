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
        Schema::create('post',function(Blueprint $table){

            $table->bigIncrements('id');
            $table->string('title',255);
            $table->longText('description');
            $table->binary('img');
            $table->timestamps();

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
