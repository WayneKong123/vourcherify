<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('discounts', function (Blueprint $table) {
        $table->id();
        $table->string('code');
        $table->enum('type', ['percentage', 'fixed_amount']);
        $table->decimal('value', 8, 2);
        $table->integer('max_redemptions')->nullable();
        $table->integer('max_redemptions_per_user')->nullable();
        $table->dateTime('expires_at')->nullable();
        $table->timestamps();
        $table->unsignedBigInteger('created_by');

        $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discounts');
    }
}
