<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public const TABLE = 'posts';
    protected $table = self::TABLE;

    public const COLUMN_ID = 'id';
    public const COLUMN_TITLE = 'title';
    public const COLUMN_IMAGE = 'image';
    public const COLUMN_TYPE = 'type';
    public const COLUMN_AUTHOR = 'author';
    public const COLUMN_DATE = 'date';
    public const COLUMN_CONTENT = 'content';
    public const COLUMN_CREATED_AT = 'created_at';
    public const COLUMN_UPDATED_AT = 'updated_at';

    protected $fillable = [
        self::COLUMN_ID,
        self::COLUMN_TITLE,
        self::COLUMN_IMAGE,
        self::COLUMN_TYPE,
        self::COLUMN_AUTHOR,
        self::COLUMN_DATE,
        self::COLUMN_CONTENT,
    ];
}
