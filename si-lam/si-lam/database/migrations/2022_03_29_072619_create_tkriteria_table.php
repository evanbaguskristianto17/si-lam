<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTkriteriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tkriterias', function (Blueprint $tkriteria) {
            $tkriteria->id();
            $tkriteria->unsignedInteger("parent_id")->nullable();
            $tkriteria->string('parent_name');
            $tkriteria->string('child_name');
            $tkriteria->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tkriteria');

    }
}
