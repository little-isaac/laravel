<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateBusinessTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('business', function (Blueprint $table) {
            $table->boolean('isFirm')->default(false)->comment('0->individual,1->firm');
            $table->string('Account_holder_name', 255)->default("");
            $table->string('bank_name', 255)->default("");
            $table->string('branch_name', 255)->default("");
            $table->string('account_number', 255)->default("");
            $table->string('ifsc_code', 255)->default("");
            $table->string('bank_location', 255)->default("");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('business', function (Blueprint $table) {
            $table->dropColumn('isFirm');
            $table->dropColumn('Account_holder_name', 255);
            $table->dropColumn('bank_name', 255);
            $table->dropColumn('branch_name', 255);
            $table->dropColumn('account_number', 255);
            $table->dropColumn('ifsc_code', 255);
            $table->dropColumn('bank_location', 255);
        });
    }

}
