<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Exibition extends Model
{
    protected $primaryKey = 'exibitionID';
    public $incrementing = false;
    
    public function artworks()
    {
        return $this->hasMany('App\Models\ArtObject');
    }

    public function Participant()
    {
        return $this->hasMany('App\Models\Participation');
    }
    
    
}