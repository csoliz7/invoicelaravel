<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model {

	protected $table = 'clients';

    protected $fillable = array('firstname','lastname','email', 'user_id');


  public function user()
  {
    return $this->belongsTo('App\User');
  } 

}
