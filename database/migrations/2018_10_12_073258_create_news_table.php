<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
           $table->increments('id');
            // for varchar we write string
            $table->rememberToken();
            // for created_at and updated_at
            $table->timestamps();

            $table->string('title',255);
            $table->string('slug',50)->unique();
            // for image use text
            $table->text('image')->nullable();

            $table->string('writer',50)->nullable();
            //text for short description
            $table->text('short_desc',50)->nullable();
            // longText for long description
            $table->longText('long_desc',50)->nullable();
            // dateTime for publish date
            $table->dateTime('publish_date');
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
        Schema::dropIfExists('news');
    }
}
