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
        //
        Schema::create('journal_disease_protein', function (Blueprint $table) {
            $table->id();
            $table->uuid("uuid");
            $table->bigInteger("journal_id")->nullable();
            $table->bigInteger("disease_id")->nullable();
            $table->bigInteger("protein_id")->nullable();
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
};
