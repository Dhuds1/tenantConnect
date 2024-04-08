<?php

namespace App\Models;

use App\Enums\BuildingNames;
use App\Enums\PriorityType;
use App\Enums\StatusType;
use App\Enums\TopicTypes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
    'details',
    'images',
  ];

  protected $casts = [
    'priority' => PriorityType::class,
    'building' => BuildingNames::class,
    'status' => StatusType::class,
    'topic' => TopicTypes::class,
    'unit' => 'integer',
    'images' => 'array',
  ];

  public function user(): BelongsTo
  {
    return $this->belongsTo(User::class);
  }

}
