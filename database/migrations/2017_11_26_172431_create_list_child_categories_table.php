<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListChildCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_child_categories', function (Blueprint $table) {
            $table->uuid('childCategoryid')->unique();;
            $table->string('parentCategory');
            $table->string('categoryname');
            $table->string('categoryOrder');
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
        Schema::drop('list_child_categories');
    }
}
