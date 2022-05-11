<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preveedors', function (Blueprint $table) {
            $table->id();
            $table->String('nombre', 150)->unique();
            $table->String('rfc', 13)->unique();
            $table->String('telefono', 20)->unique();
            $table->String('email', 80)->unique();
            $table->String('direccion', 150)->unique();
            $table->String('observaciones');
            $table->String('mayoristas', 20)->default(false);
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
        Schema::dropIfExists('preveedors');
    }
}
