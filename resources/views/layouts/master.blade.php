<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Bill Splitter</title>
    <meta charset='utf-8'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
          rel='stylesheet' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm'
          crossorigin='anonymous'>

    <link href='styles.css' rel='stylesheet'>
</head>
<body>

<h1>Bill Splitter</h1>

<form method='GET'>
    <div>
  <!--      <label>Enter Bill Amount:<input type='text' name='totalAmt' value='  <?= //sanitize($totalAmt) ?>' required/> -->
        </label>
        <p class='ex2'> Enter integer numbers.</p>
    </div>
    <div>
        <label>Enter Number of Persons:
            <input type='text' name='totalPer' value='<?= sanitize($totalPer) ?>' required>
        </label>
        <p class='ex2'> Minimum number of persons is 2 and Maximum is 20.</p>
    </div>

    <div>
        <label> Select Tip Percentage </label>

        <select name='tipPercentage' id='tipPercentage'>
            <option value='choose'>Choose one...</option>
            <option value='excellentTip' <?php if ($tipPercentage == 'excellentTip') echo 'SELECTED' ?>>20% Excellent Service</option>
            <option value='goodTip' <?php if ($tipPercentage == 'goodTip') echo 'SELECTED' ?>>18% Good Service</option>
            <option value='avgTip' <?php if ($tipPercentage == 'averageTip') echo 'SELECTED' ?>>15% Average Service</option>
        </select>
        <p class='ex2'>If not selected, no Tip will be added. </p>
    </div>

    <input type='submit' value='Calculate' class='btn btn-primary'>


</form>

<?php if ($form->hasErrors) : ?>
<div class='alert alert-danger'>
    <ul>
        <?php foreach ($errors as $error) : ?>
        <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>

<?php if (isset($results)) : ?>
<h6>Final Amount is rounded up</h6>
<div class='amount'>
    <h5>Amount per Person is: $<?= round($results) ?></h5>
</div>
<?php endif; ?>

<footer>
    <a href='http://github.com/oarangel/P2'>View on Github</a>
</footer>


</body>
</html>
