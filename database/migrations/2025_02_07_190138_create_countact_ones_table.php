<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countact_ones', function (Blueprint $table) {
         $table->id();
         $table->string('username')->unique();
         $table->text('about')->nullable();
         $table->string('photo')->nullable();
         $table->string('cover_photo')->nullable();
         $table->string('first_name');
         $table->string('last_name');
         $table->string('email')->unique();
         $table->string('country');
         $table->string('street_address');
         $table->string('city');
         $table->string('state')->nullable();
         $table->string('zip_code');
         $table->boolean('by_email')->default(false);
         $table->string('push_notifications');
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
        Schema::dropIfExists('countact_ones');
    }
};
