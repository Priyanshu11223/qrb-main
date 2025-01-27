<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePage8 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page8', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('UserID');
            $table->mediumText('q60a1')->nullable();
$table->mediumText('RefNumber-q60a1')->nullable();
$table->integer('q60a1-SA')->nullable();
$table->integer('q60a1-SQ')->nullable();
$table->mediumText('q60a1a')->nullable();
$table->mediumText('RefNumber-q60a1a')->nullable();
$table->integer('q60a1a-SA')->nullable();
$table->integer('q60a1a-SQ')->nullable();
$table->mediumText('q60a2')->nullable();
$table->mediumText('RefNumber-q60a2')->nullable();
$table->integer('q60a2-SA')->nullable();
$table->integer('q60a2-SQ')->nullable();
$table->mediumText('q60a2a')->nullable();
$table->mediumText('RefNumber-q60a2a')->nullable();
$table->integer('q60a2a-SA')->nullable();
$table->integer('q60a2a-SQ')->nullable();
$table->mediumText('q60a3')->nullable();
$table->mediumText('RefNumber-q60a3')->nullable();
$table->integer('q60a3-SA')->nullable();
$table->integer('q60a3-SQ')->nullable();
$table->mediumText('q60a3a')->nullable();
$table->mediumText('RefNumber-q60a3a')->nullable();
$table->integer('q60a3a-SA')->nullable();
$table->integer('q60a3a-SQ')->nullable();
$table->mediumText('q60a4')->nullable();
$table->mediumText('RefNumber-q60a4')->nullable();
$table->integer('q60a4-SA')->nullable();
$table->integer('q60a4-SQ')->nullable();
$table->mediumText('q60a4a')->nullable();
$table->mediumText('RefNumber-q60a4a')->nullable();
$table->integer('q60a4a-SA')->nullable();
$table->integer('q60a4a-SQ')->nullable();
$table->mediumText('q60b')->nullable();
$table->mediumText('RefNumber-q60b')->nullable();
$table->integer('q60b-SA')->nullable();
$table->integer('q60b-SQ')->nullable();
$table->mediumText('q61a')->nullable();
$table->mediumText('RefNumber-q61a')->nullable();
$table->integer('q61a-SA')->nullable();
$table->integer('q61a-SQ')->nullable();
$table->mediumText('q61a1')->nullable();
$table->mediumText('RefNumber-q61a1')->nullable();
$table->integer('q61a1-SA')->nullable();
$table->integer('q61a1-SQ')->nullable();
$table->mediumText('q61a1a')->nullable();
$table->mediumText('RefNumber-q61a1a')->nullable();
$table->integer('q61a1a-SA')->nullable();
$table->integer('q61a1a-SQ')->nullable();
$table->mediumText('q61a1b')->nullable();
$table->mediumText('RefNumber-q61a1b')->nullable();
$table->integer('q61a1b-SA')->nullable();
$table->integer('q61a1b-SQ')->nullable();
$table->mediumText('q61a1c')->nullable();
$table->mediumText('RefNumber-q61a1c')->nullable();
$table->integer('q61a1c-SA')->nullable();
$table->integer('q61a1c-SQ')->nullable();
$table->mediumText('q61b')->nullable();
$table->mediumText('RefNumber-q61b')->nullable();
$table->integer('q61b-SA')->nullable();
$table->integer('q61b-SQ')->nullable();
$table->mediumText('q61b1')->nullable();
$table->mediumText('RefNumber-q61b1')->nullable();
$table->integer('q61b1-SA')->nullable();
$table->integer('q61b1-SQ')->nullable();
$table->mediumText('q61b1a')->nullable();
$table->mediumText('RefNumber-q61b1a')->nullable();
$table->integer('q61b1a-SA')->nullable();
$table->integer('q61b1a-SQ')->nullable();
$table->mediumText('q61b2')->nullable();
$table->mediumText('RefNumber-q61b2')->nullable();
$table->integer('q61b2-SA')->nullable();
$table->integer('q61b2-SQ')->nullable();
$table->mediumText('q61b2a')->nullable();
$table->mediumText('RefNumber-q61b2a')->nullable();
$table->integer('q61b2a-SA')->nullable();
$table->integer('q61b2a-SQ')->nullable();
$table->mediumText('q62a')->nullable();
$table->mediumText('RefNumber-q62a')->nullable();
$table->integer('q62a-SA')->nullable();
$table->integer('q62a-SQ')->nullable();
$table->mediumText('q62b')->nullable();
$table->mediumText('RefNumber-q62b')->nullable();
$table->integer('q62b-SA')->nullable();
$table->integer('q62b-SQ')->nullable();
$table->mediumText('q62c')->nullable();
$table->mediumText('RefNumber-q62c')->nullable();
$table->integer('q62c-SA')->nullable();
$table->integer('q62c-SQ')->nullable();
$table->mediumText('q62d')->nullable();
$table->mediumText('RefNumber-q62d')->nullable();
$table->integer('q62d-SA')->nullable();
$table->integer('q62d-SQ')->nullable();
$table->mediumText('q62e')->nullable();
$table->mediumText('RefNumber-q62e')->nullable();
$table->integer('q62e-SA')->nullable();
$table->integer('q62e-SQ')->nullable();
$table->mediumText('q62f')->nullable();
$table->mediumText('RefNumber-q62f')->nullable();
$table->integer('q62f-SA')->nullable();
$table->integer('q62f-SQ')->nullable();
$table->mediumText('q62g')->nullable();
$table->mediumText('RefNumber-q62g')->nullable();
$table->integer('q62g-SA')->nullable();
$table->integer('q62g-SQ')->nullable();
$table->mediumText('q63a')->nullable();
$table->mediumText('RefNumber-q63a')->nullable();
$table->integer('q63a-SA')->nullable();
$table->integer('q63a-SQ')->nullable();
$table->mediumText('q63a1')->nullable();
$table->mediumText('RefNumber-q63a1')->nullable();
$table->integer('q63a1-SA')->nullable();
$table->integer('q63a1-SQ')->nullable();
$table->mediumText('q63a2')->nullable();
$table->mediumText('RefNumber-q63a2')->nullable();
$table->integer('q63a2-SA')->nullable();
$table->integer('q63a2-SQ')->nullable();
$table->mediumText('q63a3')->nullable();
$table->mediumText('RefNumber-q63a3')->nullable();
$table->integer('q63a3-SA')->nullable();
$table->integer('q63a3-SQ')->nullable();
$table->mediumText('q63a4')->nullable();
$table->mediumText('RefNumber-q63a4')->nullable();
$table->integer('q63a4-SA')->nullable();
$table->integer('q63a4-SQ')->nullable();
$table->mediumText('q63b')->nullable();
$table->mediumText('RefNumber-q63b')->nullable();
$table->integer('q63b-SA')->nullable();
$table->integer('q63b-SQ')->nullable();
$table->mediumText('q63b1')->nullable();
$table->mediumText('RefNumber-q63b1')->nullable();
$table->integer('q63b1-SA')->nullable();
$table->integer('q63b1-SQ')->nullable();
$table->mediumText('q63b2')->nullable();
$table->mediumText('RefNumber-q63b2')->nullable();
$table->integer('q63b2-SA')->nullable();
$table->integer('q63b2-SQ')->nullable();
$table->mediumText('q63b3')->nullable();
$table->mediumText('RefNumber-q63b3')->nullable();
$table->integer('q63b3-SA')->nullable();
$table->integer('q63b3-SQ')->nullable();
$table->mediumText('q63b4')->nullable();
$table->mediumText('RefNumber-q63b4')->nullable();
$table->integer('q63b4-SA')->nullable();
$table->integer('q63b4-SQ')->nullable();
$table->mediumText('q63c')->nullable();
$table->mediumText('RefNumber-q63c')->nullable();
$table->integer('q63c-SA')->nullable();
$table->integer('q63c-SQ')->nullable();
$table->mediumText('q63c1')->nullable();
$table->mediumText('RefNumber-q63c1')->nullable();
$table->integer('q63c1-SA')->nullable();
$table->integer('q63c1-SQ')->nullable();
$table->mediumText('q63c2')->nullable();
$table->mediumText('RefNumber-q63c2')->nullable();
$table->integer('q63c2-SA')->nullable();
$table->integer('q63c2-SQ')->nullable();
$table->mediumText('q63c3')->nullable();
$table->mediumText('RefNumber-q63c3')->nullable();
$table->integer('q63c3-SA')->nullable();
$table->integer('q63c3-SQ')->nullable();
$table->mediumText('q63c4')->nullable();
$table->mediumText('RefNumber-q63c4')->nullable();
$table->integer('q63c4-SA')->nullable();
$table->integer('q63c4-SQ')->nullable();
$table->mediumText('q63c5')->nullable();
$table->mediumText('RefNumber-q63c5')->nullable();
$table->integer('q63c5-SA')->nullable();
$table->integer('q63c5-SQ')->nullable();
$table->mediumText('q63c6')->nullable();
$table->mediumText('RefNumber-q63c6')->nullable();
$table->integer('q63c6-SA')->nullable();
$table->integer('q63c6-SQ')->nullable();
$table->mediumText('q63d')->nullable();
$table->mediumText('RefNumber-q63d')->nullable();
$table->integer('q63d-SA')->nullable();
$table->integer('q63d-SQ')->nullable();
$table->mediumText('q63d1')->nullable();
$table->mediumText('RefNumber-q63d1')->nullable();
$table->integer('q63d1-SA')->nullable();
$table->integer('q63d1-SQ')->nullable();
$table->mediumText('q63d2')->nullable();
$table->mediumText('RefNumber-q63d2')->nullable();
$table->integer('q63d2-SA')->nullable();
$table->integer('q63d2-SQ')->nullable();
$table->mediumText('q63e')->nullable();
$table->mediumText('RefNumber-q63e')->nullable();
$table->integer('q63e-SA')->nullable();
$table->integer('q63e-SQ')->nullable();
$table->mediumText('q63f')->nullable();
$table->mediumText('RefNumber-q63f')->nullable();
$table->integer('q63f-SA')->nullable();
$table->integer('q63f-SQ')->nullable();
$table->mediumText('q63g')->nullable();
$table->mediumText('RefNumber-q63g')->nullable();
$table->integer('q63g-SA')->nullable();
$table->integer('q63g-SQ')->nullable();
$table->mediumText('q63h')->nullable();
$table->mediumText('RefNumber-q63h')->nullable();
$table->integer('q63h-SA')->nullable();
$table->integer('q63h-SQ')->nullable();
$table->mediumText('q64')->nullable();
$table->mediumText('RefNumber-q64')->nullable();
$table->integer('q64-SA')->nullable();
$table->integer('q64-SQ')->nullable();
$table->mediumText('q64a')->nullable();
$table->mediumText('RefNumber-q64a')->nullable();
$table->integer('q64a-SA')->nullable();
$table->integer('q64a-SQ')->nullable();
$table->mediumText('q64a1')->nullable();
$table->mediumText('RefNumber-q64a1')->nullable();
$table->integer('q64a1-SA')->nullable();
$table->integer('q64a1-SQ')->nullable();
$table->mediumText('q64b')->nullable();
$table->mediumText('RefNumber-q64b')->nullable();
$table->integer('q64b-SA')->nullable();
$table->integer('q64b-SQ')->nullable();
$table->mediumText('q64b1')->nullable();
$table->mediumText('RefNumber-q64b1')->nullable();
$table->integer('q64b1-SA')->nullable();
$table->integer('q64b1-SQ')->nullable();
$table->mediumText('q64c')->nullable();
$table->mediumText('RefNumber-q64c')->nullable();
$table->integer('q64c-SA')->nullable();
$table->integer('q64c-SQ')->nullable();
$table->mediumText('q64c1')->nullable();
$table->mediumText('RefNumber-q64c1')->nullable();
$table->integer('q64c1-SA')->nullable();
$table->integer('q64c1-SQ')->nullable();
$table->mediumText('q65')->nullable();
$table->mediumText('RefNumber-q65')->nullable();
$table->integer('q65-SA')->nullable();
$table->integer('q65-SQ')->nullable();
$table->mediumText('q66')->nullable();
$table->mediumText('RefNumber-q66')->nullable();
$table->integer('q66-SA')->nullable();
$table->integer('q66-SQ')->nullable();
$table->mediumText('q66a')->nullable();
$table->mediumText('RefNumber-q66a')->nullable();
$table->integer('q66a-SA')->nullable();
$table->integer('q66a-SQ')->nullable();
$table->mediumText('q66b')->nullable();
$table->mediumText('RefNumber-q66b')->nullable();
$table->integer('q66b-SA')->nullable();
$table->integer('q66b-SQ')->nullable();
$table->mediumText('q66c')->nullable();
$table->mediumText('RefNumber-q66c')->nullable();
$table->integer('q66c-SA')->nullable();
$table->integer('q66c-SQ')->nullable();
$table->mediumText('q66d')->nullable();
$table->mediumText('RefNumber-q66d')->nullable();
$table->integer('q66d-SA')->nullable();
$table->integer('q66d-SQ')->nullable();
$table->mediumText('q67a')->nullable();
$table->mediumText('RefNumber-q67a')->nullable();
$table->integer('q67a-SA')->nullable();
$table->integer('q67a-SQ')->nullable();
$table->mediumText('q67b')->nullable();
$table->mediumText('RefNumber-q67b')->nullable();
$table->integer('q67b-SA')->nullable();
$table->integer('q67b-SQ')->nullable();
$table->mediumText('q68a')->nullable();
$table->mediumText('RefNumber-q68a')->nullable();
$table->integer('q68a-SA')->nullable();
$table->integer('q68a-SQ')->nullable();
$table->mediumText('q68b')->nullable();
$table->mediumText('RefNumber-q68b')->nullable();
$table->integer('q68b-SA')->nullable();
$table->integer('q68b-SQ')->nullable();
$table->mediumText('q68c')->nullable();
$table->mediumText('RefNumber-q68c')->nullable();
$table->integer('q68c-SA')->nullable();
$table->integer('q68c-SQ')->nullable();
$table->mediumText('q68c1')->nullable();
$table->mediumText('RefNumber-q68c1')->nullable();
$table->integer('q68c1-SA')->nullable();
$table->integer('q68c1-SQ')->nullable();
$table->mediumText('q68c2')->nullable();
$table->mediumText('RefNumber-q68c2')->nullable();
$table->integer('q68c2-SA')->nullable();
$table->integer('q68c2-SQ')->nullable();
$table->mediumText('q68c3')->nullable();
$table->mediumText('RefNumber-q68c3')->nullable();
$table->integer('q68c3-SA')->nullable();
$table->integer('q68c3-SQ')->nullable();
$table->mediumText('q69a')->nullable();
$table->mediumText('RefNumber-q69a')->nullable();
$table->integer('q69a-SA')->nullable();
$table->integer('q69a-SQ')->nullable();
$table->mediumText('q69b')->nullable();
$table->mediumText('RefNumber-q69b')->nullable();
$table->integer('q69b-SA')->nullable();
$table->integer('q69b-SQ')->nullable();
$table->mediumText('q69b1')->nullable();
$table->mediumText('RefNumber-q69b1')->nullable();
$table->integer('q69b1-SA')->nullable();
$table->integer('q69b1-SQ')->nullable();
$table->mediumText('q69b2')->nullable();
$table->mediumText('RefNumber-q69b2')->nullable();
$table->integer('q69b2-SA')->nullable();
$table->integer('q69b2-SQ')->nullable();
$table->mediumText('q69b3')->nullable();
$table->mediumText('RefNumber-q69b3')->nullable();
$table->integer('q69b3-SA')->nullable();
$table->integer('q69b3-SQ')->nullable();
$table->mediumText('q70')->nullable();
$table->mediumText('RefNumber-q70')->nullable();
$table->integer('q70-SA')->nullable();
$table->integer('q70-SQ')->nullable();
$table->mediumText('q70a')->nullable();
$table->mediumText('RefNumber-q70a')->nullable();
$table->integer('q70a-SA')->nullable();
$table->integer('q70a-SQ')->nullable();
$table->mediumText('q70b')->nullable();
$table->mediumText('RefNumber-q70b')->nullable();
$table->integer('q70b-SA')->nullable();
$table->integer('q70b-SQ')->nullable();
$table->mediumText('q70c')->nullable();
$table->mediumText('RefNumber-q70c')->nullable();
$table->integer('q70c-SA')->nullable();
$table->integer('q70c-SQ')->nullable();
$table->mediumText('q70d')->nullable();
$table->mediumText('RefNumber-q70d')->nullable();
$table->integer('q70d-SA')->nullable();
$table->integer('q70d-SQ')->nullable();
$table->mediumText('q70e')->nullable();
$table->mediumText('RefNumber-q70e')->nullable();
$table->integer('q70e-SA')->nullable();
$table->integer('q70e-SQ')->nullable();
$table->mediumText('q71')->nullable();
$table->mediumText('RefNumber-q71')->nullable();
$table->integer('q71-SA')->nullable();
$table->integer('q71-SQ')->nullable();
$table->mediumText('q71a')->nullable();
$table->mediumText('RefNumber-q71a')->nullable();
$table->integer('q71a-SA')->nullable();
$table->integer('q71a-SQ')->nullable();
$table->mediumText('q71a1')->nullable();
$table->mediumText('RefNumber-q71a1')->nullable();
$table->integer('q71a1-SA')->nullable();
$table->integer('q71a1-SQ')->nullable();
$table->mediumText('q71b')->nullable();
$table->mediumText('RefNumber-q71b')->nullable();
$table->integer('q71b-SA')->nullable();
$table->integer('q71b-SQ')->nullable();
$table->mediumText('q71b1')->nullable();
$table->mediumText('RefNumber-q71b1')->nullable();
$table->integer('q71b1-SA')->nullable();
$table->integer('q71b1-SQ')->nullable();
$table->mediumText('q72')->nullable();
$table->mediumText('RefNumber-q72')->nullable();
$table->integer('q72-SA')->nullable();
$table->integer('q72-SQ')->nullable();
$table->mediumText('q73a')->nullable();
$table->mediumText('RefNumber-q73a')->nullable();
$table->integer('q73a-SA')->nullable();
$table->integer('q73a-SQ')->nullable();
$table->mediumText('q73a1')->nullable();
$table->mediumText('RefNumber-q73a1')->nullable();
$table->integer('q73a1-SA')->nullable();
$table->integer('q73a1-SQ')->nullable();
$table->mediumText('q73b')->nullable();
$table->mediumText('RefNumber-q73b')->nullable();
$table->integer('q73b-SA')->nullable();
$table->integer('q73b-SQ')->nullable();
$table->mediumText('q73b1')->nullable();
$table->mediumText('RefNumber-q73b1')->nullable();
$table->integer('q73b1-SA')->nullable();
$table->integer('q73b1-SQ')->nullable();
$table->mediumText('q73b2')->nullable();
$table->mediumText('RefNumber-q73b2')->nullable();
$table->integer('q73b2-SA')->nullable();
$table->integer('q73b2-SQ')->nullable();
$table->mediumText('q73c')->nullable();
$table->mediumText('RefNumber-q73c')->nullable();
$table->integer('q73c-SA')->nullable();
$table->integer('q73c-SQ')->nullable();
$table->mediumText('q73d')->nullable();
$table->mediumText('RefNumber-q73d')->nullable();
$table->integer('q73d-SA')->nullable();
$table->integer('q73d-SQ')->nullable();
$table->mediumText('q73d1')->nullable();
$table->mediumText('RefNumber-q73d1')->nullable();
$table->integer('q73d1-SA')->nullable();
$table->integer('q73d1-SQ')->nullable();
$table->mediumText('q73d2')->nullable();
$table->mediumText('RefNumber-q73d2')->nullable();
$table->integer('q73d2-SA')->nullable();
$table->integer('q73d2-SQ')->nullable();
$table->mediumText('q74a')->nullable();
$table->mediumText('RefNumber-q74a')->nullable();
$table->integer('q74a-SA')->nullable();
$table->integer('q74a-SQ')->nullable();
$table->mediumText('q74b')->nullable();
$table->mediumText('RefNumber-q74b')->nullable();
$table->integer('q74b-SA')->nullable();
$table->integer('q74b-SQ')->nullable();
$table->mediumText('q75a')->nullable();
$table->mediumText('RefNumber-q75a')->nullable();
$table->integer('q75a-SA')->nullable();
$table->integer('q75a-SQ')->nullable();
$table->mediumText('q75b')->nullable();
$table->mediumText('RefNumber-q75b')->nullable();
$table->integer('q75b-SA')->nullable();
$table->integer('q75b-SQ')->nullable();
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
        Schema::dropIfExists('page8');
    }
}
