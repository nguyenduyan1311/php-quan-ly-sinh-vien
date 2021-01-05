<?php


class StudentManagement
{
    public $students;
    public static $fileName;

    public function __construct()
    {
        $this->students = [];
        $this->fileName = "data.json";
    }
    public function add($student){
        $this->students[] = $student;
        $this->saveData();
    }
    public function edit($index,$student){
        $this->students[$index] = $student;
        $this->saveData();
    }
    public function delete($index){
        unset($this->students[$index]);
        $this->saveData();
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
    public function saveData(){
        $data = [];
        foreach ($this->students as $student){
            $data[] = $student->toArray();
        }
        file_put_contents(self::$fileName,json_encode($data));
    }
    public function loadData(){
        $data = json_decode(file_get_contents(self::$fileName));
        $list = [];
    }
}