<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    // protected $table = 'history';
    protected $primaryKey = 'bookingNo';
    public $incrementing = false;
    
    public function participants()
    {
        return $this->belongsToMany('App\Models\Participation');
    }
    
}