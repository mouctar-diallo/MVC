<?php

interface IDao
{
    public function save($object);
    public function update($object);
    public function all();
    public function findById($id);
    public function delete($id);

}