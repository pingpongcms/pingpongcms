<?php namespace App;
   
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model {

    protected $fillable = [
    	'menu_id',
    	'parent_id',
    	'title',
    	'url',
    	'order',
        'attributes',
    	'active'
    ];

    protected $with = ['childs'];
    
    public function parent()
    {
    	return $this->belongsTo('App\Menu', 'menu_id');
    }

    public function childs()
    {
    	return $this->hasMany('App\MenuItem', 'parent_id', 'id');
    }

    public function hasChild()
    {
    	return $this->childs->count();
    }

    public function getAttributesAttribute($value)
    {
        if (is_string($value)) {
            return json_decode($value, true);
        }

        return [];
    }

}