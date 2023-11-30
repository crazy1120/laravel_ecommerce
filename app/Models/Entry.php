<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Entry extends Model
{
    use HasFactory;

    /**
     * Получить пользователя, который является владельцем записи
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Получить категорию, которая является владельцем записи
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
