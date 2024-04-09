<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
  use HasRoles, HasApiTokens, HasFactory, Notifiable;
  private $ticket = Ticket::class;
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
  function get_open()
  {
    return $this->tickets()->where("status", "=", "open")->get();
  }
  function get_open_count()
  {
    return $this->get_open()->count();
  }
  function get_close()
  {
    return $this->tickets()->where("status", "=", "close")->get();
  }
  function get_close_count()
  {
    return $this->get_close()->count();
  }
  function get_archive()
  {
    return $this->tickets()->where("status", "=", "archive")->get();
  }
  function get_archive_count()
  {
    return $this->get_archive()->count();
  }
  function get_review()
  {
    return $this->tickets()->where("status", "=", "review")->get();
  }
  function get_review_count()
  {
    return $this->get_review()->count();
  }
}
