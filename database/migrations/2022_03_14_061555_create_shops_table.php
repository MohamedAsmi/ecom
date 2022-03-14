<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('owner_name');
            $table->string('id_number');
            $table->string('service_type');
            $table->date('date_of_birth');
            $table->string('company_location')->is_null();
            $table->string('shop_image')->default('demo.jpg');
            $table->string('address');
            $table->string('email_address');
            $table->string('years_of_experience');
            $table->string('scope_of_service')->is_null();
            $table->string('description');
            $table->string('details_of_service');
            $table->double('price');
            // $table->integer('type')->default();
            $table->integer('active')->default(0);
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
        Schema::dropIfExists('shops');
    }
}
