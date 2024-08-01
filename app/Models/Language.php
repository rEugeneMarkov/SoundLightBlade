<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 * @property string $id
 * @property string $name
 * 
 * @property bool $active
 * @property bool $default
 * @property bool $fallback
 */

class Language extends Model
{
    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'id', 'name',
        'active', 'default', 'fallback',
    ];

    protected $casts = [
        'active' => 'boolean',
        'default' => 'boolean',
        'fallback' => 'boolean',
    ];
}
