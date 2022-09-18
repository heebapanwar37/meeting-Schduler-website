<?php

use App\Models\Meeting\MEETO;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create(MEETO::TABLE, function (Blueprint $table) {
            $table->id();
            $table->string(MEETO::COLUMN_TYPE);
            $table->date(MEETO::COLUMN_DATE);
            $table->time(MEETO::COLUMN_TIME);
            $table->string(MEETO::COLUMN_MEDIUM);
            $table->text(MEETO::COLUMN_DESCRIPTION);
            $table->integer(MEETO::COLUMN_NUMBER_OF_MEMBERS);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(MEETO::TABLE);
    }
};
