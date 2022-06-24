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
 *
 * @package App\Models
 */
class Projet extends Model
{
	protected $table = 'projets';
	public $timestamps = false;

	protected $fillable = [
		'nom'
	];
}
