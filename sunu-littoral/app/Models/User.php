<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'lastName',
        'tel',
        'adresse',
        'email',
        'password',
        'roles_id',
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
    ];

    public function actualites()
    {
        return $this->hasMany(Actualite::class);
    }

    public function meteo()
    {
        return $this->hasMany(Meteo::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function fichier()
    {
        return $this->hasMany(Fichier::class);
    }

    public function projets()
    {
        return $this->hasMany(Projet::class);
    }

    public function appelDoffre()
    {
        return $this->hasMany(Appeldoffre::class);
    }


}
