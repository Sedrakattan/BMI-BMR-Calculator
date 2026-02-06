<?php 
function BMI($weight,$heightCm){
     $heightM = $heightCm / 100;
     $bmi = $weight / ($heightM ** 2);

    
    if ($bmi < 18.5) $bmiCategory = "Underweight";
    elseif ($bmi < 24.9) $bmiCategory = "Normal weight";
    elseif ($bmi < 29.9) $bmiCategory = "Overweight";
    else $bmiCategory = "Obese";

    return $bmiCategory;
}

function BMR($gender,$weight, $heightCm,$age){
     if ($gender == "male") {
        $bmr = 88.362 + (13.397 * $weight) + (4.799 * $heightCm) - (5.677 * $age); 
    } else {
        $bmr = 447.593 + (9.247 * $weight) + (3.098 * $heightCm) - (4.330 * $age); 
    }

    return $bmr;
}


function daily_calorie_intake($gender,$weight, $heightCm,$age,$activity, $goal){
    $bmr=BMR($gender,$weight, $heightCm,$age);
    $maintenanceCalories = $bmr * $activity;
     if ($goal == "lose") {
        $dailyCalories = $maintenanceCalories - 500; // عجز حراري
    } elseif ($goal == "gain") {
        $dailyCalories = $maintenanceCalories + 500; // فائض حراري
    } else {
        $dailyCalories = $maintenanceCalories; // محافظة
    }
  return $dailyCalories;

}
