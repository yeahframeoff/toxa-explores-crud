<?php
/**
 * Created by PhpStorm.
 * User: Антон
 * Date: 28.07.14
 * Time: 22:58
 */

class Post extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'posts';

    public function user()
    {
        return $this->belongsTo('User');
    }
} 