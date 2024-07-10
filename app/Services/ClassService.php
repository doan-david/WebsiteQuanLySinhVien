<?php

namespace App\Services;

use App\Repository\Class\ClassRepository;

class ClassService
{
    private $classRepository;

    public function __construct(ClassRepository $classRepository)
    {
        $this->classRepository = $classRepository;
    }

    public function getAll()
    {
        return response()->json($this->classRepository->all());
    }

    public function store($data)
    {
        $dataStore = [
            'code' => $data['code'],
            'name' => $data['name'],
            'created_at' => now(),
            'updated_at' => now(),
        ];
        return $this->classRepository->store($dataStore);
    }

    public function update($id, $data)
    {
        $dataUpdate = [
            'code' => $data['code'],
            'name' => $data['name'],
            'updated_at' => now(),
        ];
        return $this->classRepository->update($id, $dataUpdate);
    }

    public function find($id)
    {
        return response()->json($this->classRepository->find($id));
    }
    public function delete($id)
    {
        return $this->classRepository->delete($id);
    }
}
