<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('cats', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->string('image')->nullable(); // Ruta de la foto
            $table->boolean('adoptable')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cats');
    }
};
