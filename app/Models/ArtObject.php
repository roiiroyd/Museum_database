<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ArtObject extends Model
{
    // protected $table = 'art_object';
    protected $primaryKey = 'artID';
    public $incrementing = false;
    
    public function artists()
    {
        return $this->hasOne('App\Models\Artist');
    }
    
    public function exibition()
    {
        return $this->belongsTo('App\Models\Exibition');
    }

    public function permanent_collection()
    {
        return $this->belongsTo('App\Models\PermanentColl');
    }

    public function borrowed_collection()
    {
        return $this->belongsTo('App\Models\BorrowedColl');
    }
}