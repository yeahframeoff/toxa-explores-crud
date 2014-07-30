<?php
/**
 * Created by PhpStorm.
 * User: Антон
 * Date: 29.07.14
 * Time: 1:35
 */

interface IStorage
{
    /**
     * Creates object in storage
     *
     * @return mixed
     */
    public function create();


    /**
     * Retrieves all data from storage
     *
     * @return Object[]
     */
    public function fetchAll();

    /**
     * Saves object to storage
     *
     * @param $data Object
     * @return mixed
     */
    public function save($data);

}