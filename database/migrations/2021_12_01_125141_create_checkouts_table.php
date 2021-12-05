<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users','id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('camp_id')->references('id')->on('camps')->onUpdate('cascade')->onUpdate('cascade');
            $table->string('card_number', 100)->nullable();
            $table->date('expired')->nullable();
            $table->string('cvc', 100)->nullable();
            $table->boolean('is_paid')->nullable();
            $table->timestamps();
            $table->softDeletes('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checkouts');
    }
}
