<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToAdvisorsTable extends Migration
{
    public function up()
    {
        Schema::table('advisors', function (Blueprint $table) {
            $table->unsignedBigInteger('user_email_id')->nullable();
            $table->foreign('user_email_id', 'user_email_fk_5423364')->references('id')->on('users');
            $table->unsignedBigInteger('transactions_id')->nullable();
            $table->foreign('transactions_id', 'transactions_fk_5423397')->references('id')->on('transactions');
            $table->unsignedBigInteger('owner_id');
            $table->foreign('owner_id', 'owner_fk_5423368')->references('id')->on('users');
        });
    }
}
