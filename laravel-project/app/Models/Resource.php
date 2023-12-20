<?php
// app/Models/Resource.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected $primaryKey = 'ResourceID';
    public $timestamps = true;

    protected $table = 'resources';

    protected $fillable = [
        'PropertyID',
        'ResidentID',
        'Title',
        'Description',
    ];

    public function property()
    {
        return $this->belongsTo(Property::class, 'PropertyID');
    }

    public function resident()
    {
        return $this->belongsTo(Resident::class, 'ResidentID');
    }
}