<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckupRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkup_records', function (Blueprint $table) {
            $table->uuid('checkid');
            $table->uuid('partyid');
            $table->text('complaint_summary');
            $table->text('complaint_details');
            $table->text('diagnosis_details');
            $table->text('treatment_details');
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
        Schema::drop('checkup_records');
    }
}
