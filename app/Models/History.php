<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $primaryKey = 'bookingNo';
    public $incrementing = false;
    
    public function participant()
    {
        return $this->belongsToMany('App\Models\Participation');
    }
    
}