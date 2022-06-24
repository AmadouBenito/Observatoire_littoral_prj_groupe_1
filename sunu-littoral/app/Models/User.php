<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $roles_idroles
 * 
 * @property Collection|Actualite[] $actualites
 * @property Collection|Csv[] $csvs
 * @property Collection|Image[] $images
 * @property Collection|Meteo[] $meteos
 * @property Collection|Pdf[] $pdfs
 * @property Collection|Role[] $roles
 * @property Collection|Texte[] $textes
 * @property Collection|Video[] $videos
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'users';

	protected $casts = [
		'roles_idroles' => 'int'
	];
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
        'role',

    ];

	protected $dates = [
		'email_verified_at'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	public function actualites()
	{
		return $this->hasMany(Actualite::class, 'users_id');
	}

	public function csvs()
	{
		return $this->hasMany(Csv::class, 'users_id');
	}

	public function images()
	{
		return $this->hasMany(Image::class, 'users_id');
	}

	public function meteos()
	{
		return $this->hasMany(Meteo::class, 'users_id');
	}

	public function pdfs()
	{
		return $this->hasMany(Pdf::class, 'users_id');
	}

	public function roles()
	{
		return $this->hasMany(Role::class, 'users_id');
	}

	public function textes()
	{
		return $this->hasMany(Texte::class, 'users_id');
	}

	public function videos()
	{
		return $this->hasMany(Video::class, 'users_id');
	}
}
