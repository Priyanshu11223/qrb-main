<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePage3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page3', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('UserID');
           $table->mediumText('q9a')->nullable();
$table->mediumText('RefNumber-q9a')->nullable();
$table->integer('q9a-SA')->nullable();
$table->integer('q9a-SQ')->nullable();
$table->mediumText('q9a1')->nullable();
$table->mediumText('RefNumber-q9a1')->nullable();
$table->integer('q9a1-SA')->nullable();
$table->integer('q9a1-SQ')->nullable();
$table->mediumText('q9b')->nullable();
$table->mediumText('RefNumber-q9b')->nullable();
$table->integer('q9b-SA')->nullable();
$table->integer('q9b-SQ')->nullable();
$table->mediumText('q9c')->nullable();
$table->mediumText('RefNumber-q9c')->nullable();
$table->integer('q9c-SA')->nullable();
$table->integer('q9c-SQ')->nullable();
$table->mediumText('q10a')->nullable();
$table->mediumText('RefNumber-q10a')->nullable();
$table->integer('q10a-SA')->nullable();
$table->integer('q10a-SQ')->nullable();
$table->mediumText('q10a1')->nullable();
$table->mediumText('RefNumber-q10a1')->nullable();
$table->integer('q10a1-SA')->nullable();
$table->integer('q10a1-SQ')->nullable();
$table->mediumText('q10b')->nullable();
$table->mediumText('RefNumber-q10b')->nullable();
$table->integer('q10b-SA')->nullable();
$table->integer('q10b-SQ')->nullable();
$table->mediumText('q10c')->nullable();
$table->mediumText('RefNumber-q10c')->nullable();
$table->integer('q10c-SA')->nullable();
$table->integer('q10c-SQ')->nullable();
$table->mediumText('q10d')->nullable();
$table->mediumText('RefNumber-q10d')->nullable();
$table->integer('q10d-SA')->nullable();
$table->integer('q10d-SQ')->nullable();
$table->mediumText('q10e')->nullable();
$table->mediumText('RefNumber-q10e')->nullable();
$table->integer('q10e-SA')->nullable();
$table->integer('q10e-SQ')->nullable();
$table->mediumText('q11a')->nullable();
$table->mediumText('RefNumber-q11a')->nullable();
$table->integer('q11a-SA')->nullable();
$table->integer('q11a-SQ')->nullable();
$table->mediumText('q11a1')->nullable();
$table->mediumText('RefNumber-q11a1')->nullable();
$table->integer('q11a1-SA')->nullable();
$table->integer('q11a1-SQ')->nullable();
$table->mediumText('q11b')->nullable();
$table->mediumText('RefNumber-q11b')->nullable();
$table->integer('q11b-SA')->nullable();
$table->integer('q11b-SQ')->nullable();
$table->mediumText('q11b1')->nullable();
$table->mediumText('RefNumber-q11b1')->nullable();
$table->integer('q11b1-SA')->nullable();
$table->integer('q11b1-SQ')->nullable();
$table->mediumText('q11b2')->nullable();
$table->mediumText('RefNumber-q11b2')->nullable();
$table->integer('q11b2-SA')->nullable();
$table->integer('q11b2-SQ')->nullable();
$table->mediumText('q11c')->nullable();
$table->mediumText('RefNumber-q11c')->nullable();
$table->integer('q11c-SA')->nullable();
$table->integer('q11c-SQ')->nullable();
$table->mediumText('q11c1')->nullable();
$table->mediumText('RefNumber-q11c1')->nullable();
$table->integer('q11c1-SA')->nullable();
$table->integer('q11c1-SQ')->nullable();
$table->mediumText('q11c2')->nullable();
$table->mediumText('RefNumber-q11c2')->nullable();
$table->integer('q11c2-SA')->nullable();
$table->integer('q11c2-SQ')->nullable();
$table->mediumText('q11c3')->nullable();
$table->mediumText('RefNumber-q11c3')->nullable();
$table->integer('q11c3-SA')->nullable();
$table->integer('q11c3-SQ')->nullable();
$table->mediumText('q11d')->nullable();
$table->mediumText('RefNumber-q11d')->nullable();
$table->integer('q11d-SA')->nullable();
$table->integer('q11d-SQ')->nullable();
$table->mediumText('q11d1')->nullable();
$table->mediumText('RefNumber-q11d1')->nullable();
$table->integer('q11d1-SA')->nullable();
$table->integer('q11d1-SQ')->nullable();
$table->mediumText('q12a')->nullable();
$table->mediumText('RefNumber-q12a')->nullable();
$table->integer('q12a-SA')->nullable();
$table->integer('q12a-SQ')->nullable();
$table->mediumText('q12b')->nullable();
$table->mediumText('RefNumber-q12b')->nullable();
$table->integer('q12b-SA')->nullable();
$table->integer('q12b-SQ')->nullable();
$table->mediumText('q12c')->nullable();
$table->mediumText('RefNumber-q12c')->nullable();
$table->integer('q12c-SA')->nullable();
$table->integer('q12c-SQ')->nullable();
$table->mediumText('q12c1')->nullable();
$table->mediumText('RefNumber-q12c1')->nullable();
$table->integer('q12c1-SA')->nullable();
$table->integer('q12c1-SQ')->nullable();
$table->mediumText('q12c1a')->nullable();
$table->mediumText('RefNumber-q12c1a')->nullable();
$table->integer('q12c1a-SA')->nullable();
$table->integer('q12c1a-SQ')->nullable();
$table->mediumText('q12c2')->nullable();
$table->mediumText('RefNumber-q12c2')->nullable();
$table->integer('q12c2-SA')->nullable();
$table->integer('q12c2-SQ')->nullable();
$table->mediumText('q12c2a')->nullable();
$table->mediumText('RefNumber-q12c2a')->nullable();
$table->integer('q12c2a-SA')->nullable();
$table->integer('q12c2a-SQ')->nullable();
$table->mediumText('q12c3')->nullable();
$table->mediumText('RefNumber-q12c3')->nullable();
$table->integer('q12c3-SA')->nullable();
$table->integer('q12c3-SQ')->nullable();
$table->mediumText('q12c3a')->nullable();
$table->mediumText('RefNumber-q12c3a')->nullable();
$table->integer('q12c3a-SA')->nullable();
$table->integer('q12c3a-SQ')->nullable();
$table->mediumText('q13a')->nullable();
$table->mediumText('RefNumber-q13a')->nullable();
$table->integer('q13a-SA')->nullable();
$table->integer('q13a-SQ')->nullable();
$table->mediumText('q13b')->nullable();
$table->mediumText('RefNumber-q13b')->nullable();
$table->integer('q13b-SA')->nullable();
$table->integer('q13b-SQ')->nullable();
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
        Schema::dropIfExists('page3');
    }
}
