<?php
// app/Models/Property.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $primaryKey = 'PropertyID';
    public $timestamps = true;

    // モデルと関連しているテーブル名
    protected $table = 'properties';

    // 可変項目
    protected $fillable = [
        'Address',
        'PropertyName',
    ];
}