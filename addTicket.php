<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<h2>Add a ticket!</h2>
<?php
/* define upload path */
/* Connect to db */
require_once('connectvars.php');


?>

<!-- The form -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

<label for="issue">Issue:</label>
<input type="text" id="issuestring" name="issue" value="<?php if(!empty($issue)) echo $issue;?>"/> <br>

<label for="urgency">Urgency</label>
<input type="text " id="urgency-id" name="urgency-score" value="<?php if (!empty($score))
echo $score; ?>"/>

<br>
<label for="status">Status</label>
<input type="text" id="status-id" name="status" value="<?php if (!empty($status)) echo $status;?>"/>
<br>

<label for="status">externalinternal</label>
<input type="text" id="extint-id" name="extint" value="<?php if (!empty($extint)) echo $extint;?>"/>
<br>

<label for="owner">owner:</label>
    <input type="text" id="owner" name="owner" value="<?php if (!empty($owner)) echo $owner; ?>" />
    <br />
<input type="submit" value="add" name="submit"/>









</form>
    
</body>
</html>