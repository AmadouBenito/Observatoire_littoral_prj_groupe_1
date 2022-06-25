<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TypeFichier
 *
 * @property int $id
 * @property string|null $libelle
 *
 * @property Collection|Fichier[] $fichiers
 *
 * @package App\Models
 */
class TypeFichier extends Model
{
	protected $table = 'type-fichiers';
	public $timestamps = false;

	protected $fillable = [
		'libelle'
	];

	public function fichiers()
	{
		return $this->hasMany(Fichier::class);
	}
}
