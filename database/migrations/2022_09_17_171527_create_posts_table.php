<?php

use App\Models\Post;
use Google\Service\ShoppingContent\Resource\Pos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create(Post::TABLE, function (Blueprint $table) {
            $table->id();
            $table->string(Post::COLUMN_TITLE);
            $table->string(Post::COLUMN_IMAGE)->nullable();
            $table->string(Post::COLUMN_TYPE);
            $table->string(Post::COLUMN_AUTHOR);
            $table->dateTime(Post::COLUMN_DATE);
            $table->string(Post::COLUMN_CONTENT);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(Post::TABLE);
    }
};
