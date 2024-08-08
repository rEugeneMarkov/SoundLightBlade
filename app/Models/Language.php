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

    public function getStateText(): string
    {
        $state = [];

        if ($this->active) {
            $state[] = 'Active';
        }

        if ($this->default) {
            $state[] = 'Default';
        }

        if ($this->fallback) {
            $state[] = 'Fallback';
        }

        return implode(', ', $state);
    }
    public static function findDefault(): ?self
    {
        return self::query()
            ->where('active', true)
            ->where('default', true)
            ->first();
    }

    public static function findFallback(): ?self
    {
        return self::query()
            ->where('active', true)
            ->where('fallback', true)
            ->first();
    }
}
