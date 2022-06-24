<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 * 
 * @property int $id
 * @property int $users_id
 * 
 * @property User $user
 *
 * @package App\Models
 */
class Role extends Model
{
	protected $table = 'roles';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'users_id' => 'int'
	];

	protected $fillable = [
		'users_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'users_id');
	}
}
