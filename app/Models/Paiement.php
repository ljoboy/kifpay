<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paiement extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'percu_le',
        'jeton_id',
        'compte_id'
    ];

    protected function casts(): array
    {
        return [
            'percu_le' => 'date',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
        ];
    }

    public function jeton(): BelongsTo
    {
        return $this->belongsTo(Jeton::class);
    }

    public function compte(): BelongsTo
    {
        return $this->belongsTo(Compte::class);
    }
}
