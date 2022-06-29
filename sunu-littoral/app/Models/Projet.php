<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Projet
 *
 * @property int $id
 * @property string|null $nom
 * @property string|null $fichir
 * @property int $user_id
 *
 * @property User $user
 *
 * @package App\Models
 */
class Projet extends Model
{
	protected $table = 'projets';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'nom',
		'fichir',
		'user_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

    public function ongs()
    {
        return $this->belongsToMany(User::class, 'ongs');
    }
}
