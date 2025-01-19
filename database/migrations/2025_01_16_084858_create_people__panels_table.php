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
        Schema::create('people__panels', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->default();
            $table->string('image')->nullable()->default();
            $table->string('designation')->nullable()->default();
            $table->string('people_anel')->nullable()->default();
            $table->string('facebook')->nullable()->default();
            $table->string('linkdin')->nullable()->default();
            $table->string('instragram')->nullable()->default();
            $table->string('website')->nullable()->default();
            $table->string('status')->nullable()->default(0);
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
        Schema::dropIfExists('people__panels');
    }
};
