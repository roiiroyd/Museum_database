<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Exibitions extends Model
{
    protected $table = 'exibition';
    protected $primaryKey = 'exibitionID';
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