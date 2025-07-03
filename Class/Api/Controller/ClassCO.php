<?php

class ClassCO extends ClassCM {
     
    private $classId;
    private $className;
    private $classCode;
    private $classTeacher;
     
    public function __construct($classId, $className, $classCode, $classTeacher) {
        $this->classId = $classId;
        $this->className = $className;
        $this->classCode = $classCode;
        $this->classTeacher = $classTeacher;
    } 

    public function introduceClass() {
        if ($this->isEmptyInput() == true) {
            header("Location: ./../../index.php?msg=empty_fields");
            exit();
        }

    $this->appendClass($this->classId, $this->className, $this->classCode, $this->classTeacher);
    }

    // For editing an existing Class
    public function updateClass() {
        if ($this->isEmptyClass() == true) {
            header("Location: ./../../index.php?msg=empty_fields");
            exit();
        }

    $this->ammendClass($this->classId, $this->className, $this->classCode, $this->classTeacher);
    }

  private function isEmptyInput() {
    
  }  
}