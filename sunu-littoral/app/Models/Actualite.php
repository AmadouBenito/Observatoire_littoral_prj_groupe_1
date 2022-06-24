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
 * @property int $categories_id
 * 
 * @property Category $category
 * @property User $user
 *
 * @package App\Models
 */
class Actualite extends Model
{
	protected $table = 'actualites';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'users_id' => 'int',
		'categories_id' => 'int'
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

	public function category()
	{
		return $this->belongsTo(Category::class, 'categories_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'users_id');
	}
}
