<?php
class college{
    public $name;
    public $rollno;
    public $branch;

     function student(){
        echo $this->name. " is student";
        //return $this->name;

    }
}
$stud1 = new college();
$stud1->name = "Namrata";
$stud1->rollno = "1";
$stud1->branch = "ENTC";
$stud1->student();
echo "<br>";
$stud2 = new college();
$stud2->name = "Kumar";
$stud2->rollno = "2";
$stud2->branch = "ENTC";
$stud2->student();
//print_r($stud1);
?>