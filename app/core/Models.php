<?php

class Models
{
    protected $db;
    protected $readDb;

    public function __construct()
    {
        $this->db = new Query();
        $this->readDb = new PreventQuery("db", "root", "root", "multidb");
    }
}
