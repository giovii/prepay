<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToAmbassadorsTable extends Migration
{
    public function up()
    {
        Schema::table('ambassadors', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id', 'user_fk_5423291')->references('id')->on('users');
            $table->unsignedBigInteger('verified_at_id')->nullable();
            $table->foreign('verified_at_id', 'verified_at_fk_5423292')->references('id')->on('users');
            $table->unsignedBigInteger('invested_id')->nullable();
            $table->foreign('invested_id', 'invested_fk_5423293')->references('id')->on('wallets');
            $table->unsignedBigInteger('owner_id');
            $table->foreign('owner_id', 'owner_fk_5423297')->references('id')->on('users');
        });
    }
}
