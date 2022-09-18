<?php

namespace App\Models\Meeting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MEETO extends Model
{
    use HasFactory;
    public const TABLE = 'online-meetings';
    protected $table = self::TABLE;

    public const COLUMN_ID = 'id';
    public const COLUMN_TYPE = 'type';
    public const COLUMN_MEDIUM = 'platform';
    public const COLUMN_DATE = 'date';
    public const COLUMN_TIME = 'time';
    public const COLUMN_DESCRIPTION = 'discription';
    public const COLUMN_NUMBER_OF_MEMBERS = 'members';
    public const COLUMN_CREATED_AT = 'craeted_at';
    public const COLUMN_UPDATED_AT = 'updated_at';

    protected $fillable = [
    self::COLUMN_ID,
    self::COLUMN_TYPE,
    self::COLUMN_MEDIUM,
    self::COLUMN_DATE,
    self::COLUMN_TIME,
    self::COLUMN_NUMBER_OF_MEMBERS,
    self::COLUMN_DESCRIPTION,
    ];

}
