<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    // protected $table = 'artists';
    protected $primaryKey = 'artistID';
    public $incrementing = false;
    
    public function art_object()
    {
        return $this->hasMany('App\Models\ArtObject');
    }
    
}