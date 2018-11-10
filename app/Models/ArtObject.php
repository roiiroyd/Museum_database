<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ArtObject extends Model
{
    protected $primaryKey = 'artID';
    public $incrementing = false;
    
    public function artist()
    {
        return $this->hasOne('App\Models\Artist');
    }
    
    public function showInExibition()
    {
        return $this->belongsTo('App\Models\Exibition');
    }

    public function permanentCollection()
    {
        return $this->belongsTo('App\Models\PermanentColl');
    }

    public function borrowedCollection()
    {
        return $this->belongsTo('App\Models\BorrowedColl');
    }
}