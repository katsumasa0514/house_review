<?php
// app/Models/Resident.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    protected $primaryKey = 'ResidentID';
    public $timestamps = true;

    protected $table = 'residents';

    protected $fillable = [
        'PropertyID',
        'Username',
        'ProfilePicture',
        'ContactInfo',
    ];

    public function property()
    {
        return $this->belongsTo(Property::class, 'PropertyID');
    }
}