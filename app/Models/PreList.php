<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreList extends Model
{
    use HasFactory;
    protected $table = 'pre_lists';
    protected $primaryKey = 'pre_id';
    public $timestamps = false;
    protected $fillable = ['pre_name', 'quest_level', 'user_count', 'ticket_price', 'available', 'time_start', 'time_end', 'note'];


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
