<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
  use HasApiTokens, HasFactory, Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'name',
    'email',
    'phone',
    'password',
  ];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array<int, string>
   */
  protected $hidden = [
    'password',
    'remember_token',
  ];

  /**
   * The attributes that should be cast.
   *
   * @var array<string, string>
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
    'password' => 'hashed',
  ];

  // User has ticket relationship

  public function tickets(): HasMany
  {
    return $this->hasMany(Ticket::class);
  }
  // Returns all tickets
  public function get_tickets($order = 'DESC')
  {
    return $this->hasMany(Ticket::class)->orderBy('created_at', $order)->get();
  }
  // Returns all open tickets from user
  public function open_tickets()
  {
    return $this->hasMany(Ticket::class)->where('status')->get();
  }
  public function open_tickets_count()
  {
    return $this->open_tickets()->count();
  }
  // Return all closed tickets from user
  public function closed_tickets()
  {
    return $this->hasMany(Ticket::class)->where('status')->get();
  }
  public function closed_tickets_count()
  {
    return $this->closed_tickets()->count();
  }
}
