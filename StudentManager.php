<?php
include_once "Student.php";

class StudentManager
{
    private string $fileName;

    public function __construct()
    {
        $this->fileName = 'data.json';
    }

    //Luu data vao file json
    function saveData($data)
    {
        $dataJSON = json_encode($data);
        file_put_contents($this->fileName, $dataJSON);
    }

    //lay data tu file Json
    function loadData()
    {
        //upload data json
        $dataJSON = file_get_contents($this->fileName);
        // tra ve file dang mang associative
        return json_decode($dataJSON, true);
    }

    //sua thong tin student
    public function update($id, $student)
    {
        $arr = [
            "name" => $student->getName(),
            "age" => $student->getAge(),
            "email" => $student->getEmail(),
            "address" => $student->getAddress()
        ];
        $arrList = $this->loadData();
        $arrList[$id] = $arr;
        $this->saveData($arrList);
    }

    //xoa 1 student
    public function delete($id)
    {
        $students = $this->loadData();
        array_splice($students, $id, 1);
        $this->saveData($students);
    }

    //them 1 student vao data
    function add($student)
    {
        $arr = [
            "name" => $student->getName(),
            "age" => $student->getAge(),
            "email" => $student->getEmail(),
            "address" => $student->getAddress()
        ];
        $arrList = $this->loadData();
        $arrList[] = $arr;
        $this->saveData($arrList);
    }
}