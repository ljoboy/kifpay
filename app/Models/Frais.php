<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Frais extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'intitule',
        'montant',
        'promotion_id',
        'currency'
    ];

    protected function casts(): array
    {
        return  [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
        ];
    }

    public function promotion(): BelongsTo
    {
        return $this->belongsTo(Promotion::class);
    }

    public function comptes(): BelongsToMany
    {
        return $this->belongsToMany(Compte::class);
    }

    public function libelle(): Attribute
    {
        return Attribute::make(
            get: function ($value) {
                return $this->intitule . ' | ' . $this->promotion->nom;
            }
        );
    }
}
