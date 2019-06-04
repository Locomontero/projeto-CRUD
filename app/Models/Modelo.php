<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
	protected $fillable=[
		'SKU','Nome','Descrição','Preço'
	];
}