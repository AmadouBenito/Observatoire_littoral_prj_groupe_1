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
 * @property int $user_id
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
		'user_id' => 'int'
	];

	protected $fillable = [
		'vent',
		'vague',
		'etatCiel',
		'temperature',
		'zone',
		'user_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
