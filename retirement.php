                         <!doctype html>
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<meta http-equiv="expires" content="0" />
<html lang="en">
<head>
  <title>  </title>
  <link rel="stylesheet" href="">
</head>
	<body>
	

	<?php
	$age = $_POST['age'];
	$salary = $_POST['salary'];
	$amount_saved = $_POST['companyMatch'];
	$goal = $_POST['goal'];

    $errTrigger1 = 0;

    if (age == null || $amount_saved == null || $salary == null || $goal == null ) {

        $errTrigger1 = 1;
    }
    if (ctype_alpha($age) || ctype_alpha($amount_saved) || ctype_alpha($salary) || ctype_alpha($goal)) {

        $errTrigger2 = 2;
    }

    if ($errTrigger == 0)
    {

        $match = ($amount_saved *.01) * .35;
        $total_amount_one_year = $match + $amount_saved;
        $total_years = 0;

        $total_amount = 0;
        while ($total_amount < $goal)
        {
            $total_amount += $total_amount_one_year;
            $total_years += 1;
        }
        $age_at_goal = $age + $total_years;

        echo '<h1>Your age at desired goal ' . $age_at_goal . '</h1>';
    }
	?>

    <p style="color: red">
        <?php
        if($errTrigger1 == 1) {
            echo "Cannot calculate retirement without information. Please go back and put in everything needed";
        }
        if($errTrigger2 == 2) {
            echo "Cannot calculate retirement without having every field be numerical value. Please go back and put in everything needed";
        }
        ?>
    </p>

	
	

	</body>
</html>