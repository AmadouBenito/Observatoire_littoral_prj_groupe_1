<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * 
 * @property int $id
 * @property string|null $libelle
 * 
 * @property Collection|Actualite[] $actualites
 *
 * @package App\Models
 */
class Category extends Model
{
	protected $table = 'categories';
	public $timestamps = false;

	protected $fillable = [
		'libelle'
	];

	public function actualites()
	{
		return $this->hasMany(Actualite::class, 'categories_id');
	}
}
