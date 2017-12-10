<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'notes';

    protected $fillable = [
        'user_id', 'note',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    /**
     * @param $userID
     * @return string
     */
    public function getNotes($userID)
    {
        return static::orderBy('id','desc')
            ->where('user_id', $userID)->get();
    }
}
