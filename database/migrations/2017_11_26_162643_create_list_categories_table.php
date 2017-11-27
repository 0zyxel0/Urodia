<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_categories', function (Blueprint $table) {

            $table->increments('id');
            $table->uuid('categoryid')->unique();
            $table->string('categoryname');
            $table->string('categoryOrder');
            $table->boolean('isParent');
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
        Schema::drop('list_categories');
    }
}
