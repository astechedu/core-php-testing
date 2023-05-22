<?php
interface DatabaseInterface
{
    public function db_connect();
    public function add($data);
    public function get($where);
    public function update($where);
    public function remove($where);
}
?>