<?php
class Users extends Models
{
    private $functions;

    public function __construct()
    {
        parent::__construct();
        $this->functions = new Functions();
    }
    
    public function getUser($query = [], $columns = '*', $joins = [], $groupBy = '', $orderBy = '', $limit = '')
    {
        return $this->readDb->getData('tbl_users', $query, $columns, $joins, $groupBy, $orderBy, $limit);
    }

    public function createUser($data)
    {
        return $this->db->insertData('tbl_users', $data);
    }

    public function updateUser($data, $query)
    {
        return $this->db->updateData('tbl_users', $data, $query);
    }

    public function deleteUser($query)
    {
        return $this->db->deleteData('tbl_users', $query);
    }
}
