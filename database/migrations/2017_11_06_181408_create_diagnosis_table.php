<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnosis', function (Blueprint $table) {
            $table->uuid('diagnosisid');
            $table->uuid('partyid');
            $table->string('givenname');
            $table->string('familyName');
            $table->string('middlename');
            $table->date('birthday');
            $table->string('age');
            $table->string('address');
            $table->string('email');
            $table->string('obsIns');
            $table->string('menopause');
            $table->string('gender');
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
        Schema::drop('diagnosis');
    }
}
