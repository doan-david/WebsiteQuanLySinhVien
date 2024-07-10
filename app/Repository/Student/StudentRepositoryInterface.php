<?php

namespace App\Repository\Student;

interface StudentRepositoryInterface
{
    public function all();

    public function find($id);

    public function store($data);

    public function update($data, $id);

    public function delete($id);

    public function findByAdminId($id);
}
