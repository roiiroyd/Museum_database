<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $primaryKey = 'artistID';
    public $incrementing = false;
    
    public function artworks()
    {
        return $this->hasMany('App\Models\ArtObject');
    }
    
}