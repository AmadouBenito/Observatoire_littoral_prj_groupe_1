<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Actualite
 *
 * @property int $id
 * @property string|null $titre
 * @property string|null $contenue
 * @property string|null $image
 * @property string|null $video
 * @property Carbon|null $date
 * @property int $users_id
 *
 * @property User $user
 *
 * @package App\Models
 */
class Actualite extends Model
{
	protected $table = 'actualites';
	public $timestamps = false;

	protected $casts = [
		'users_id' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'titre',
		'contenue',
		'image',
		'video',
		'date',
		'users_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

    public function categorie()
	{
		return $this->belongsTo(Category::class);
	}
}
