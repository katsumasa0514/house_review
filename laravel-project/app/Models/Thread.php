<?php
// app/Models/Thread.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $primaryKey = 'ThreadID';
    public $timestamps = true;

    protected $table = 'threads';

    protected $fillable = [
        'ForumID',
        'ResidentID',
        'Title',
        'Content',
    ];

    public function forum()
    {
        return $this->belongsTo(Forum::class, 'ForumID');
    }

    public function resident()
    {
        return $this->belongsTo(Resident::class, 'ResidentID');
    }
}