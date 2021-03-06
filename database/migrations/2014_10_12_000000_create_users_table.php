<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('surname')->index();
            $table->integer('gender')->nullable();
            $table->string('username')->index();
            $table->string('slug')->unique()->index();
            $table->text('about')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('cv')->nullable();
            $table->string('photo_id')->default(1);
            $table->string('role_id')->default(1);
            $table->string('category_id')->default(1)->nullable();
            $table->string('investigation_id')->nullable();
            $table->string('username_changed')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
