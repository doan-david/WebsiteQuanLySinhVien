<?php

namespace App\Repository\Student;

use App\Models\Student;

class StudentRepository
{
    private $studentModel;

    public function __construct(Student $studentModel)
    {
        return $this->studentModel = $studentModel;
    }

    public function all()
    {
        return $this->studentModel->all();
    }

    public function find($id)
    {
        return $this->studentModel->where('id', $id)->first();
    }

    public function store($data)
    {
        return $this->studentModel->insertGetId($data);
    }

    public function update($id, $data)
    {
        return $this->studentModel->where('id', $id)->update($data);
    }

    public function delete($id)
    {
        return $this->studentModel->destroy($id);
    }

    public function findByAdminId($id)
    {
        return $this->studentModel->where('admin_id', $id)->first();
    }
}
