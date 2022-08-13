<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitizensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citizens', function (Blueprint $table) {
            $table->id();
            $table->string('fullname', 35);
            $table->string('gender', 6);
            $table->text('address', 150);
            $table->string('phone', 11);
            $table->unsignedBigInteger('ward_id');
            $table->foreign('ward_id')
              ->references('id')->on('wards')->onDelete('cascade');
            $table->timestamps();


            // Not Included in Question: Binds each citizen to a state / LGA / Ward
//             $table->unsignedBigInteger('state_id');
//             $table->foreign('state_id')
//               ->references('id')->on('states')->onDelete('cascade');
//             $table->timestamps();


//             $table->unsignedBigInteger('lga_id');
//             $table->foreign('lga_id')
//               ->references('id')->on('lgas')->onDelete('cascade');
//             $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citizens');
    }
}
