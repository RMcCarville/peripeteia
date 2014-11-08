<?php

class Outcome extends eloquent {
    protected $fillable = array('outline_id', 'description');
    
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	 protected $table =  "outcomes";
    
    public function outline(){
       return $this->belongsTo('Outline');
    }
}