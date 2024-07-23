<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Compte extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'numero',
        'banque',
    ];

    protected function casts(): array
    {
        return  [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
        ];
    }

    public function frais(): HasMany
    {
        return $this->hasMany(Frais::class);
    }
}
