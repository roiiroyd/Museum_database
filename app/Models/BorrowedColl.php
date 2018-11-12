<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class BorrowedColl extends Model
{
    // protected $table = 'borrowed_collection';
    protected $primaryKey = 'id';
    public $incrementing = false;
    
    public function art_object()
    {
        return $this->hasMany('App\Models\ArtObject');
    }

}