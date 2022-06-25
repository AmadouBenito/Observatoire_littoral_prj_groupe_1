<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ong
 *
 * @property int $id
 * @property string|null $commentaire
 * @property int $users_id
 * @property int $projets_id
 *
 * @package App\Models
 */
class Ong extends Model
{
	protected $table = 'ongs';
	public $timestamps = false;

	protected $casts = [
		'users_id' => 'int',
		'projets_id' => 'int'
	];

	protected $fillable = [
		'commentaire'
	];

}
