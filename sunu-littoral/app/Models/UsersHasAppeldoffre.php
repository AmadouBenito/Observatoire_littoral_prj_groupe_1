<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UsersHasAppeldoffre
 * 
 * @property int $users_id
 * @property int $users_roles_idroles
 * @property int $appelDoffres_id
 *
 * @package App\Models
 */
class UsersHasAppeldoffre extends Model
{
	protected $table = 'users_has_appeldoffres';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'users_id' => 'int',
		'users_roles_idroles' => 'int',
		'appelDoffres_id' => 'int'
	];
}
