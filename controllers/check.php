<?php 

require_once __DIR__ . '/../core/validator.php';
require_once __DIR__ . '/../core/function.php';
use core\Validator;
 
$bmi = $bmr = $dailyCalories = 0;
$bmiCategory = "";
$errors=[];


    $name = $_POST['name']; 
    $age = (int)$_POST['age']; 
    $gender = $_POST['gender']; 
    $weight = (float)$_POST['weight']; 
    $heightCm = (float)$_POST['height']; 
    $activity = (float)$_POST['activity']; 
    $goal = $_POST['goal']; 

    
   $errors = Validator::validate($_POST);
   if (empty($errors)){
    $BMI=BMI($weight,$heightCm);
    
    $dailyCalories= daily_calorie_intake($gender,$weight, $heightCm,$age,$activity, $goal);
    require "views/result.view.php";
    } else {
        // في حال وجود أخطاء، نعود لصفحة الإدخال
        require "views/check.view.php";
    }

   

