<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

/**
 * @method static creating(\Closure $param)
 */
trait AddsPersonnelId
{
    public static function bootAddsUserId(): void
    {
        static::creating(function ($model) {
            if (Auth::check()) {
                $model->personnel_id = Auth::id();
            }
            $model->code = strtoupper(Str::random(12));
        });
    }
}
