<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('subscriptionGalaxPayId')->nullable();
            $table->string('subscriptionMyId')->nullable();
            $table->string('additionalInfo')->nullable();
            $table->string('datetimeLastSendToOperator')->nullable();
            $table->integer('galaxPayId')->nullable();
            $table->string('installment')->nullable();
            $table->string('myId')->nullable();
            $table->string('payday')->nullable();
            $table->string('paydayDate')->nullable();
            $table->boolean('payedOutsideGalaxPay')->nullable();
            $table->string('status')->nullable();
            $table->double('value')->nullable();
            $table->dateTime('createdAt')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
