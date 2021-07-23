<?php

use App\Models\Receiving;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssuingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issuings', function (Blueprint $table) {
            $table->id();
            $table->string('receiving_id');
            $table->string('location_id');
            $table->string('inLocation');
            $table->string('outLocation');
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
        Schema::dropIfExists('issuings');
    }
}
