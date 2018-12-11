<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Participants extends Model
{
    // protected $table = 'participants';
    protected $primaryKey = 'regisNo';
    public $incrementing = false;
    
    public function history()
    {
        return $this->hasMany('App\Models\History');
    }
    
    public function exhibition()
    {
        return $this->belongsToMany('App\Models\Exhibition');
    }
}