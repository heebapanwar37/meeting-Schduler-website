<?php

use App\Models\Task;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create(Task::TABLE, function (Blueprint $table) {
            $table->id();
            $table->string(Task:: COLUMN_TITLE);
            $table->string(Task:: COLUMN_DESCRIPTION);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(Task::TABLE);
    }
};
