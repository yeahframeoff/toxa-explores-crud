<?php
/**
 * Created by PhpStorm.
 * User: Антон
 * Date: 29.07.14
 * Time: 10:22
 */

interface IPostStorage extends IStorage
{
    public function fetchAllByGroup($group);
}