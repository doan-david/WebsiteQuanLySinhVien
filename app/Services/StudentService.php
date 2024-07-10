<?php

namespace App\Services;

use App\Repository\Student\StudentRepository;

class StudentService
{
    private $studentRepository;

    public function __construct(StudentRepository $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }

    public function getAll()
    {
        $data = $this->studentRepository->all();
        return response()->json($data);
    }

    public function find($id)
    {
        $data =$this->studentRepository->find($id);
        return response()->json($data);
    }

    public function store($data)
    {
        $dataStore = [
            'code' => $data['code'],
            'name' => $data['name'],
            'username' => $data['username'],
            'password' => $data['password'],
            'email' => $data['email'],
            'gender' => $data['gender'],
            'birthday' => $data['birthday'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'hobby' => $data['hobby'],
            'status' => $data['status'],
            'image' => $data['image'],
            'description' => $data['description'],
            'admin_id' => $data['admin_id'],
            'class_id' => $data['class_id'],
            'created_at' => now(),
            'updated_at' => now()
        ];
        return $this->studentRepository->store($dataStore);
    }

    public function update($id, $data)
    {
        $dataUpdate = [
            'code' => $data['code'],
            'name' => $data['name'],
            'username' => $data['username'],
            'password' => $data['password'],
            'email' => $data['email'],
            'gender' => $data['gender'],
            'birthday' => $data['birthday'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'hobby' => $data['hobby'],
            'status' => $data['status'],
            'image' => $data['image'],
            'description' => $data['description'],
            'admin_id' => $data['admin_id'],
            'class_id' => $data['class_id'],
            'updated_at' => now()
        ];
        return $this->studentRepository->update($id, $dataUpdate);
    }

    public function delete($id)
    {
        return $this->studentRepository->delete($id);
    }

    public function findByAdminId($admin_id) {

        return $this->studentRepository->findByAdminId($admin_id);
    }
}
