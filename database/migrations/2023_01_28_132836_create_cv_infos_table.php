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
        Schema::create('cv_infos', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('cv_image')->nullable();
            $table->string('user_id');
            $table->string('pro_name')->nullable();
            $table->string('designation')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('address3')->nullable();
            $table->string('address4')->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('email')->nullable();
            $table->string('website_link')->nullable();
            $table->string('html')->nullable();
            $table->string('css')->nullable();
            $table->string('sass')->nullable();
            $table->string('js')->nullable();
            $table->string('jquery')->nullable();
            $table->string('react')->nullable();
            $table->string('angular')->nullable();
            $table->string('vue')->nullable();
            $table->string('php')->nullable();
            $table->string('aws')->nullable();
            $table->string('ai')->nullable();
            $table->string('machine_learning')->nullable();
            $table->string('ms_word')->nullable();
            $table->string('ms_excel')->nullable();
            $table->string('adobe_photoshop')->nullable();
            $table->string('adobe_xd')->nullable();
            $table->string('facebook1')->nullable();
            $table->string('facebook2')->nullable();
            $table->string('twitter1')->nullable();
            $table->string('twitter2')->nullable();
            $table->string('youtube')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('pinterest')->nullable();
            $table->text('about_you')->nullable();

           
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
        Schema::dropIfExists('cv_infos');
    }
};
