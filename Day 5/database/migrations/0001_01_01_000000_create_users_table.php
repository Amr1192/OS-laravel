<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    //migration is the structure        DDL
    //model Data mainuplation language      insert, update, delete etccc
    public function up(): void      //Do
    {
        Schema::create('users', function (Blueprint $table) {

            $table->id();           //column id  auto increment  primary key   unsinged big integer
            $table->string('name');         //varchar(255)
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role',['user','admin']);
            $table->timestamps();       //created at    updated at
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void        //Rollback 
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
