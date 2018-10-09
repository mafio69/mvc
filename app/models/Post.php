<?php
/**
 * Created by PhpStorm.
 * User: MariuszF
 * Date: 09.10.2018
 * Time: 22:05
 */

class Post
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
}