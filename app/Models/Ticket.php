<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant',
        'building',
        'unit',
        'email',
        'topic',
        'priority',
        'title',
        'details'
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::Class);
    }
}
