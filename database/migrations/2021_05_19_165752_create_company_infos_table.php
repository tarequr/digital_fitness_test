<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('qtn_1')->nullable();
            $table->string('qtn_2')->nullable();
            $table->string('qtn_3')->nullable();
            $table->string('qtn_4')->nullable();
            $table->string('qtn_5')->nullable();
            $table->string('qtn_6')->nullable();
            $table->string('qtn_7')->nullable();
            $table->string('qtn_8')->nullable();
            $table->string('qtn_9')->nullable();
            $table->string('qtn_10')->nullable();
            $table->string('qtn_11')->nullable();
            $table->string('qtn_12')->nullable();
            $table->string('qtn_13')->nullable();
            $table->string('qtn_14')->nullable();
            $table->string('qtn_15')->nullable();
            $table->string('qtn_16')->nullable();
            $table->string('qtn_17')->nullable();
            $table->string('qtn_18')->nullable();
            $table->string('qtn_19')->nullable();
            $table->string('qtn_20')->nullable();
            $table->string('qtn_21')->nullable();
            $table->string('qtn_22')->nullable();
            $table->string('qtn_23')->nullable();
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
        Schema::dropIfExists('company_infos');
    }
}
