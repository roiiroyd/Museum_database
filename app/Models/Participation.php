<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $primaryKey = 'regisNo';
    public $incrementing = false;
    
    public function bookingHistory()
    {
        return $this->hasMany('App\Models\History');
    }
    
    public function enterExibition()
    {
        return $this->belongsToMany('App\Models\Exibition');
    }
}