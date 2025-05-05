<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Evaluation</title>
</head>
<body>
   <?php
   $grade = 100;
   $rank = " ";

   if  ($grade == 100 && >=93) {
    echo "Rank: A";
   }elseif($grade == 92 && >=90) {
    echo "Rank: A-";
   }elseif($grade == 89 && >=87) {
    echo "Rank: B+";
   }elseif($grade == 86 && >= 83) {
    echo "Rank: B";
   }elseif($grade == 82 && >=80) {
    echo "Rank: B-";
   }elseif($grade == 79 && >=77) {
    echo "Rank: C+";
   }elseif($grade == 76 && >=73) {
    echo "Rank: C";
   }elseif($grade == 72 && >=70) {
    echo "Rank: C-";
   }elseif($grade == 69 && >=67) {
    echo "Rank: D+";
   }elseif($grade == 66 && >=63) {
    echo "Rank: D";
   }elseif($grade == 62 && >=60) {
    echo "Rank: D-";
   }elseif($grade < 60) {
    echo "Rank: F";
   }
   ?>
</body>
</html>