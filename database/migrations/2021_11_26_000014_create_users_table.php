<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('referrer_id')->nullable();
            $table->foreign('referrer_id')->references('id')->on('users');
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('email')->nullable()->unique();
            $table->datetime('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('remember_token')->nullable();
            $table->string('locale')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('investor_type')->nullable();
            $table->string('refcode')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('vat')->nullable();
            $table->string('user_type')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
