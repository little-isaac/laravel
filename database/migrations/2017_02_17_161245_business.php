<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Business extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('business', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid');
            $table->bigInteger('customer_id');
            $table->string('name');
            $table->string('contact_no');
            $table->string('email');
            $table->string('zipcode');
            $table->string('no_of_physical_locations');
            $table->bigInteger('category');
            $table->boolean('isApproved');
            $table->timestamps();
            $table->index('email');
            $table->index('uuid');
            $table->index('customer_id');
            $table->index('zipcode');
            $table->index('category');
            $table->index('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('business');
    }

}
