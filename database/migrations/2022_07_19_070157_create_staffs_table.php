<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->string('sID',20)->primary();
            $table -> string("Name",255);
            $table -> string("Address",255);
            $table -> date("Birthday");
            $table -> decimal("Salary",20);
            $table -> string("Phone")->unique();
            $table->timestamps();
        });
//        Schema::create('customers', function (Blueprint $table) {
//            $table->integer("Phone")->primary();
//            $table -> string("Name",255);
//            $table -> string("Address",255);
//            $table -> date("Address",255);
//            $table->timestamps();
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staffs');
    }
}
