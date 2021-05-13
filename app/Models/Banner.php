<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    public $timestamps = false;
	protected $fileable = [
		'slide_name', 'slide_image', 'slide_status', 'slide_desc'
	];
	protected $primaryKey = 'slide_id';
	protected $table = 'tbl_slider';
	use HasFactory;
}
