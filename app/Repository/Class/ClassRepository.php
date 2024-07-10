<?php

namespace App\Repository\Class;

use App\Models\ClassName;

class ClassRepository
{
    private $classModel;

    public function __construct(ClassName $classModel)
    {
        return $this->classModel = $classModel;
    }

    public function all()
    {
        return $this->classModel->get();
    }

    public function find($id)
    {
        return $this->classModel->where('id', $id)->first();
    }

    public function store($data)
    {
        return $this->classModel->insertGetId($data);
    }
    public function update($id, $data)
    {
        return $this->classModel->where('id', $id)->update($data);
    }
    public function delete($id)
    {
        return $this->classModel->destroy($id);
    }
}
