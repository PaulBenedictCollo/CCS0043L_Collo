<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formative 2 Number 1</title>
</head>
<body>
</form>
    <?php
    $numbers = [];
    for ($i = 0; $i < 15; $i++) (
        $numbers[] = rand(1,100);
    )

    $max = max($numbers);
    $min = min($numbers);
    $sum = array_sum($numbers);
    $average = $sum / count($numbers);

    echo "Array of numbers: " .implode(", " , $numbers) . "<br>"; 
    echo "Highest Number: $max <br>";
    echo "Lowest Number: $min <br>"; 
    echo "Sum of all Numbers: $sum <br>";
    echo "Average of all Numbers: $average <br>"; 
    ?>
    
</body>
</html>