<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Etudiant extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'matricule',
        'nom',
        'postnom',
        'prenom',
        'telephone',
        'addresse',
        'lieu_de_naissance',
        'date_de_naissance',
        'nationalite',
        'promotion_id'
    ];

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
        ];
    }

    public function promotion(): BelongsTo
    {
        return $this->belongsTo(Promotion::class);
    }

    public function fullname(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => ucfirst($this->prenom). ' ' . strtoupper($this->nom) . ' ' . strtoupper($this->postnom)
        );
    }
}
