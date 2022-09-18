<?php

use App\Models\Meeting\MEETF;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create(MEETF::TABLE, function (Blueprint $table) {
            $table->id();
            $table->string(MEETF::COLUMN_TYPE);
            $table->date(MEETF::COLUMN_DATE);
            $table->time(MEETF::COLUMN_TIME);
            $table->string(MEETF::COLUMN_LOCATION);
            $table->text(MEETF::COLUMN_DESCRIPTION);
            $table->integer(MEETF::COLUMN_NUMBER_OF_MEMBERS);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(MEETF::TABLE);
    }
};
