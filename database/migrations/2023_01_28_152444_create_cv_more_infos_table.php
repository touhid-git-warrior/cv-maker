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
        Schema::create('cv_more_infos', function (Blueprint $table) {
            $table->id();
            $table->integer('cvinfo_id');
            $table->integer('user_id');
            $table->string('exp_year1')->nullable();
            $table->string('company_name1')->nullable();
            $table->string('about_exp1')->nullable();
            $table->string('exp_year2')->nullable();
            $table->string('company_name2')->nullable();
            $table->string('about_exp2')->nullable();
            $table->string('exp_year3')->nullable();
            $table->string('company_name3')->nullable();
            $table->string('about_exp3')->nullable();
            $table->string('exp_year4')->nullable();
            $table->string('company_name4')->nullable();
            $table->string('about_exp4')->nullable();
            $table->string('exp_year5')->nullable();
            $table->string('company_name5')->nullable();
            $table->string('about_exp5')->nullable();
            $table->string('edu_year1')->nullable();
            $table->string('inst_name1')->nullable();
            $table->string('about_edu1')->nullable();
            $table->string('edu_year2')->nullable();
            $table->string('inst_name2')->nullable();
            $table->string('about_edu2')->nullable();
            $table->string('edu_year3')->nullable();
            $table->string('inst_name3')->nullable();
            $table->string('about_edu3')->nullable();
            $table->string('edu_year4')->nullable();
            $table->string('inst_name4')->nullable();
            $table->string('about_edu4')->nullable();
            $table->string('edu_year5')->nullable();
            $table->string('inst_name5')->nullable();
            $table->string('about_edu5')->nullable();
            $table->string('hobby1')->nullable();
            $table->string('hobby2')->nullable();
            $table->string('hobby3')->nullable();
            $table->string('hobby4')->nullable();
            $table->string('hobby5')->nullable();
            $table->string('hobby6')->nullable();
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
        Schema::dropIfExists('cv_more_infos');
    }
};
