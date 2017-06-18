<?php

namespace coshelf;

use Illuminate\Database\Eloquent\Model;

class makerProduct extends Model
{
    //
    protected $table = 'makerProduct';
    public $timestamps = false;
    
    protected $fillable = array('name','category','price','description','requirements');
    protected $guarded = ['product_id'];
    
    protected $primaryKey = 'product_id';
}
