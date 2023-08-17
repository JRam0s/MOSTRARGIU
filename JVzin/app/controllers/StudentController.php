<?php

namespace app\controllers;

use app\database\models\Student;
use Exception;

class StudentController
{
    private $student;
    public function __construct()
    {
        $this->student = new Student();
    }
    public function read()
    {
        return json_encode($this->student->all());
    }
    public function monitor()
    {
        return json_encode($this->student->monitor());
    }
    public function create($data)
    {
        try{
            $response = $this->student->create(
                array(
                    'nome' => $data['nome'],
                    'turma' => $data['turma']
                )
                );
        } catch(Exception $e){

        }
    }
    public function update($data)
    {
    }
    public function delete($data)
    {
    }
}
