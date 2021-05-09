<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $table = 'menu_items';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'url',
        'parent_id',
        'created_at',
        'updated_at'
    ];

    // One level child
    public function child() {
        return $this->hasMany('App\Models\MenuItem', 'parent_id');
    }

    // Recursive children
    public function children() {
        return $this->hasMany('App\Models\MenuItem', 'parent_id')->with('children');
    }

    // One level parent
    public function parent() {
        return $this->belongsTo('App\Models\MenuItem', 'parent_id');
    }

    // Recursive parents
    public function parents() {
        return $this->belongsTo('App\Models\MenuItem', 'parent_id')->with('parent');
    }

}
