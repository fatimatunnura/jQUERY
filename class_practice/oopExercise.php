<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 1/29/15
 * Time: 8:32 AM
 */
 function_autoload($class_name)
 {
     include_once("classes/".$class_name.".php");

 }
$bkiict=new Bkiict();
//echo $bkiict->fullName;
$studdent=new Student();
//var_damp($student);
$course=new Course();
echo $course->title;
echo "<br>";
$course->title='Course Title';
echo $course->title;
echo "<br>";
var_damp($course);