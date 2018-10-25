<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
             $table->increments('id');
            // for varchar we write string
            $table->rememberToken();
            // for created_at and updated_at
            $table->timestamps();

            $table->string('title',255);
            $table->string('slug',50)->unique();
            // for image use text
            $table->text('image')->nullable();

            
             // for status -->tinyint size 1 we use boolean
            $table->boolean('status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
