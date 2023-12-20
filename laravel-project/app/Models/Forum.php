<?php
// app/Models/Forum.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $primaryKey = 'ForumID';
    public $timestamps = true;

    protected $table = 'forums';

    protected $fillable = [
        'PropertyID',
        'ForumName',
    ];

    public function property()
    {
        return $this->belongsTo(Property::class, 'PropertyID');
    }
}