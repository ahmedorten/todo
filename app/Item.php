<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';
    protected $fillable = ['title','list_id'];
    
    public function lists()
    {
        return $this->belongsTo('App\ListModel','item_list');
    }
}
