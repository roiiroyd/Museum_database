<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class PermanentColl extends Model
{
    // protected $table = 'permanent_collection';
    protected $primaryKey = 'id';
    public $incrementing = false;
    
    public function art_object()
    {
        return $this->hasMany('App\Models\ArtObject');
    }
    
}