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
 * @property int $user_id
 * @property int $projet_id
 *
 * @package App\Models
 */
class Ong extends Model
{
	protected $table = 'ongs';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'projet_id' => 'int'
	];

	protected $fillable = [
		'commentaire'
	];

}
