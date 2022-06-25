<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Postulant
 *
 * @property int $id
 * @property string|null $fichier
 * @property int $users_id
 * @property int $appelDoffres_id
 *
 * @package App\Models
 */
class Postulant extends Model
{
	protected $table = 'postulants';
	public $timestamps = false;

	protected $casts = [
		'users_id' => 'int',
		'appelDoffres_id' => 'int'
	];

	protected $fillable = [
		'fichier'
	];


}
