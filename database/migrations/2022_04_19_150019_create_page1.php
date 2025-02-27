<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePage1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page1', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('UserID');
            $table->mediumText('AuditFirmName');
            $table->mediumText('LLPNumber');
            $table->mediumText('FirmRegistrationDate');
            $table->mediumText('NumbersofPartnersinFirm');
            $table->mediumText('NameofPartnerSubmited');
            $table->mediumText('ICAINumber');
            $table->string('EmailId');
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
        Schema::dropIfExists('page1');
    }
}
