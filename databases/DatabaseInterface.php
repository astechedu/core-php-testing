<?php
interface DatabaseInterface
{
    public function db_connect();
    public function add($pdo, $username, $salary, $city);
    public function get($where);
    public function update($where);
    public function remove($where);
    public function select($pdo);
    public function authenticate($pdo,$username,$city);
}
?>