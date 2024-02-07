<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
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

    public function ticket()
    {
        return $this->hasMany(Ticket::class);
    }
    // Returns all tickets
    public function get_tickets()
    {
        return $this->hasMany(Ticket::class)->get();
    }
    // Returns all open tickets from user
    public function open_tickets()
    {
        return $this->hasMany(Ticket::class)->where('status', 'open')->get();
    }
    // Return all closed tickets from user
    public function closed_tickets()
    {
        return $this->hasMany(Ticket::class)->where('status', 'closed')->get();
    }
}
