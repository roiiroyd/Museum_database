<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class PermanentColl extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;
    
    public function artworks()
    {
        return $this->hasMany('App\Models\ArtObject');
    }
    
}