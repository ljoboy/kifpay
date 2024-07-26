<?php

namespace App\Models;

use App\Traits\AddCodeToJeton;
use App\Traits\AddsPersonnelId;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jeton extends Model
{
    use HasFactory;
    use SoftDeletes;
    use AddsPersonnelId;

    protected $fillable = [
        'intitule',
        'delivre_le',
        'etudiant_id',
        'personnel_id',
        'frais_id',
    ];

    protected function casts(): array
    {
        return  [
            'delivre_le' => 'date',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
        ];
    }

    public function personnel(): BelongsTo
    {
        return $this->belongsTo(User::class, 'personnel_id');
    }
    public function frais(): BelongsTo
    {
        return $this->belongsTo(Frais::class);
    }

    public function etudiant(): BelongsTo
    {
        return $this->belongsTo(Etudiant::class);
    }
}
