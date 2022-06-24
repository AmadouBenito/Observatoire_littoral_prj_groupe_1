<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Meteo
 * 
 * @property int $id
 * @property string|null $vent
 * @property string|null $vague
 * @property string|null $etatCiel
 * @property int|null $temperature
 * @property string|null $zone
 * @property int $users_id
 * @property int $users_roles_idroles
 * 
 * @property User $user
 *
 * @package App\Models
 */
class Meteo extends Model
{
	protected $table = 'meteos';
	public $timestamps = false;

	protected $casts = [
		'temperature' => 'int',
		'users_id' => 'int',
		'users_roles_idroles' => 'int'
	];

	protected $fillable = [
		'vent',
		'vague',
		'etatCiel',
		'temperature',
		'zone'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'users_id')
					->where('users.id', '=', 'meteos.users_id')
					->where('users.roles_idroles', '=', 'meteos.users_roles_idroles');
	}
}
