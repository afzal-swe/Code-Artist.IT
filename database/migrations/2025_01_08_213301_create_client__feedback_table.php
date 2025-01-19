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
        Schema::create('client__feedback', function (Blueprint $table) {
            $table->id();
            $table->string('client_img')->nullable();
            $table->string('name')->nullable();
            $table->string('designation')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('client__feedback');
    }
};
