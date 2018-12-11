<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Exhibitions extends Model
{
    protected $table = 'exhibition';
    protected $primaryKey = 'exhibitionID';
    public $incrementing = false;
    
    public function art_object()
    {
        return $this->hasMany('App\Models\ArtObject');
    }

    public function participants()
    {
        return $this->hasMany('App\Models\Participation');
    }
    
    
}