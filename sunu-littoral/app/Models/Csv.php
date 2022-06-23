<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Csv
 * 
 * @property int $idimage
 * @property string|null $titre
 * @property string|null $type
 * @property int $users_id
 * 
 * @property User $user
 *
 * @package App\Models
 */
class Csv extends Model
{
	protected $table = 'csvs';
	protected $primaryKey = 'idimage';
	public $timestamps = false;

	protected $casts = [
		'users_id' => 'int'
	];

	protected $fillable = [
		'titre',
		'type',
		'users_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'users_id');
	}
}
