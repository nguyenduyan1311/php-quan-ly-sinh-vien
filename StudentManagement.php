<?php


class StudentManagement
{
    public $students;

    public function __construct()
    {
        $this->students = [];
    }
    public function add($student){
        $this->students[] = $student;
    }
    public function edit($index,$student){
        $this->students[$index] = $student;
    }
    public function delete($index){
        unset($this->students[$index]);
    }
    public function getIndex($index){
        return $this->students[$index];
    }
}