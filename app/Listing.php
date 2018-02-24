<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $table = 'listings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'end_date', 'user_id'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function product()
    {
        return $this->hasOne('App\Product');
    }
}
