<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Appeldoffre
 *
 * @property int $id
 * @property string|null $libelle
 * @property Carbon|null $dateDebut
 * @property Carbon|null $dateFin
 * @property string|null $fichier
 * @property int $users_id
 *
 * @property User $user
 *
 * @package App\Models
 */
class Appeldoffre extends Model
{
	protected $table = 'appeldoffres';
	public $timestamps = false;

	protected $casts = [
		'users_id' => 'int'
	];

	protected $dates = [
		'dateDebut',
		'dateFin'
	];

	protected $fillable = [
		'libelle',
		'dateDebut',
		'dateFin',
		'fichier',
		'users_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

    public function postulants()
	{
		return $this->hasMany(Postulant::class);
	}
}
