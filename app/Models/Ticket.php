<?php

namespace App\Models;

use App\Enums\PriorityType;
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
    'unit' => 'integer',
    'priority' => PriorityType::class,
    'images' => 'array',
  ];

  public function user(): BelongsTo
  {
    return $this->belongsTo(User::class);
  }

  // App\Models\Ticket.php

  public function setAttribute($key, $value)
  {
    if ($key === 'images' && is_string($value)) {
      $value = json_decode($value, true); // Decode JSON if it's a string
    }

    return parent::setAttribute($key, $value);
  }
}
