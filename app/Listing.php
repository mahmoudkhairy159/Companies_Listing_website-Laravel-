<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Listing extends Model
{
    protected $fillable=['name','email','address','website','phone','bio', 'user_id'];
    public function user(){
        return $this->belongsTo(User :: class);
    }
}
