<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->integer("cID")->primary();
            $table->string("PhoneCTM",255);
            $table->string("sID",20);
            $table->string("carID",20);
            $table->date("startDate");
            $table->date("endDate");
            $table->decimal("Total",65);
            $table->string("Image",255);
            $table->timestamps();
            $table->foreign("PhoneCTM")->references("Phone")->on("customers");
            $table->foreign("sID")->references("sID")->on("staffs");
            $table->foreign("carID")->references("carID")->on("cars");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}
