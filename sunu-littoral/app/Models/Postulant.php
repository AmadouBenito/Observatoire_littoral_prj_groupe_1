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
 * @property int $user_id
 * @property int $appelDoffre_id
 *
 * @package App\Models
 */
class Postulant extends Model
{
	protected $table = 'postulants';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'appelDoffre_id' => 'int'
	];

	protected $fillable = [
		'fichier'
	];


}
