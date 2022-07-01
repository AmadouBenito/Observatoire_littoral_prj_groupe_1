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
 * @property int $user_id
 * @property int $type-fichier_id
 * @property int $domaine_id
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
		'user_id' => 'int',
		'type-fichier_id' => 'int',
		'domaine_id' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'titre',
		'url',
		'date',
		'user_id',
		'type_fichier_id',
		'domaine_id',
		'pub_yes_no'
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

	public function publier()
	{
		return $this->save(['pub_yes_no', '1']);
	}

}
