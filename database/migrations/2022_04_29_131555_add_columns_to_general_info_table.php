<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToGeneralInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('general_info', function (Blueprint $table) {
            $table->string('about_bg')->nullable();
            $table->string('work_bg')->nullable();
            $table->string('service_bg')->nullable();
            $table->string('client_bg')->nullable();
            $table->string('contact_bg')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('general_info', function (Blueprint $table) {
            $table->dropColumn('about_bg');
            $table->dropColumn('work_bg');
            $table->dropColumn('service_bg');
            $table->dropColumn('client_bg');
            $table->dropColumn('contact_bg');
        });
    }
}
