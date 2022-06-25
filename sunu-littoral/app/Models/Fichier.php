<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Fichier
 *
 * @property int $id
 * @property string|null $titre
 * @property string|null $url
 * @property Carbon|null $date
 * @property int $users_id
 * @property int $type-fichiers_id
 * @property int $domaines_id
 *
 * @property Domaine $domaine
 * @property TypeFichier $type_fichier
 * @property User $user
 *
 * @package App\Models
 */
class Fichier extends Model
{
	protected $table = 'fichiers';
	public $timestamps = false;

	protected $casts = [
		'users_id' => 'int',
		'type-fichiers_id' => 'int',
		'domaines_id' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'titre',
		'url',
		'date',
		'users_id',
		'type-fichiers_id',
		'domaines_id'
	];

	public function domaine()
	{
		return $this->belongsTo(Domaine::class);
	}

	public function type_fichier()
	{
		return $this->belongsTo(TypeFichier::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
