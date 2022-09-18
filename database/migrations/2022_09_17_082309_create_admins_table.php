<?php

use App\Models\Admin;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create(Admin::TABLE, function (Blueprint $table) {
            $table->id();
            $table->string(Admin::COLUMN_NAME);
            $table->string(Admin::COLUMN_EMAIL)->unique();
            $table->string(Admin::COLUMN_PASSWORD);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(Admin::TABLE);
    }
};
