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
    public function getIndexByName($name){
        foreach($this->students as $key=>$student){
            $studentName = $student->getName();
            if ($studentName == $name){
                return $key;
            }
        }
        return -1;
    }
    public function sortAZ(){
        sort($this->students);
    }
    public function sortZA(){
        rsort($this->students);
    }
}