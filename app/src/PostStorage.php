<?php
/**
 * Created by PhpStorm.
 * User: Антон
 * Date: 29.07.14
 * Time: 10:24
 */

class PostStorage implements IPostStorage
{

    /**
     * Retrieves all data from storage
     *
     * @return Object[]
     */
    public function all()
    {
        return Post::all();
    }

    /**
     * Creates object in storage
     *
     * @param $data array
     * @return mixed
     */
    public function create()
    {
        return new User();
    }

    /**
     * Saves object to storage
     *
     * @param $obj Object
     * @return mixed
     */
    public function save($obj)
    {
        return $obj->save();
    }
}