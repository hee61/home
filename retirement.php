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

    $errTrigger = 0;

    if (!isset($feet) && !isset($weight_lbs) && !isset($inches)) {
        $errTrigger = 1;
    }
    if ($errTrigger == 0)
    {

        $match = $amount_saved * .35;
        $total_amount_one_year = $match + $amount_saved;
        $total_years = 0;

        $total_amount = 0;
        while ($total_amount < $goal)
        {
            $total_amount += $total_amount_one_year;
            $total_years += 1;
        }
        $age_at_goal = $age + $total_years;
        ?>
        <h1>Your age at desired goal <?php echo $age_at_goal ?>.</h1>
    <?php
        echo "";
    }
	?>

    <p style="color: red">
        <?php
        if($errTrigger == 1) {
            echo "Cannot calculate bmi without necessary information. Please go back and put in everything needed";
        }
        ?>
    </p>

	
	

	</body>
</html>