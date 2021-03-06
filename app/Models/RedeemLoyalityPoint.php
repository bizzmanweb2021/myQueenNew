<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RedeemLoyalityPoint extends Model
{
	
    use HasFactory;
	protected $table='withdraw_loyalitypoints_details';
    protected $fillable = [
	    'user_id',
		'credit_points',
		'status',
		'redemption_date'
    ];
}