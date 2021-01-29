<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function ($table) {
            $table->tinyInteger('pay_option')->default('1');
            $table->string('department',50)->nullable();
            $table->unsignedBigInteger('university_id')->nullable();
            $table->unsignedBigInteger('program_id')->nullable();
            $table->unsignedBigInteger('designation_id')->nullable();

            $table->index('university_id');
            $table->foreign('university_id')->references('id')->on('universities')->onDelete('cascade');
            $table->index('program_id');
            $table->foreign('program_id')->references('id')->on('programs')->onDelete('cascade');
            $table->index('designation_id');
            $table->foreign('designation_id')->references('id')->on('designations')->onDelete('cascade');

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
