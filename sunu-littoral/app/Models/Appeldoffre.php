<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Appeldoffre
 * 
 * @property int $id
 * @property string|null $nom
 *
 * @package App\Models
 */
class Appeldoffre extends Model
{
	protected $table = 'appeldoffres';
	public $timestamps = false;

	protected $fillable = [
		'nom'
	];
}
