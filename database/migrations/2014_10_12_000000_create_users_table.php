<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            // for varchar we write string
            $table->rememberToken();
            // for created_at and updated_at
            $table->timestamps();
            $table->string('name',50);
            $table->string('password');
            $table->string('email',50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            // for text we write text
            $table->text('address')->nullable();
            $table->string('contact_no',50)->nullable(); 
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
        Schema::dropIfExists('users');
    }
}
