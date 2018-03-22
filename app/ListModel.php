<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListModel extends Model
{
    protected $table = 'lists';
    protected $fillable = ['title' , 'date'];
    public function items()
    {
        return $this->hasMany('App\item','item_list');
    }
    
}
