<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class Workshop extends Model
{
    protected $table = 'workshops';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'start',
        'end',
        'event_id',
        'name',
        'created_at',
        'updated_at'
    ];

    public function Event()
    {
        return $this->belongsTo('event', 'id');
    }
}
