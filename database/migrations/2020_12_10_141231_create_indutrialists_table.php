<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndutrialistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indutrialists', function (Blueprint $table) {
            
            $table->String('Photo');
            $table->String('CompanyPersonalEmailID');
            $table->String('NameWithInitials');
            $table->String('Designation');
            $table->String('LinkedIn');
            $table->String('FieldOfInterests');
            $table->String('ContactNumber');
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
        Schema::dropIfExists('indutrialists');
    }
}
