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

$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME );
/* Grab the ticket data from the POST */
$issue = $_POST['issue-msg'];
$urgency = $_POST['urgency-score'];
$status = $_POST['status'];
$extint = $_POST['extint'];
$owner = $_POST['owner'];
$creator = $_POST['creator'];
/* write the data to database */

$query = "INSERT INTO ticket
         VALUES (0,
         '$issue',
         '$urgency',
         '$status',
         '$extint',
         '$owner'
         ,NOW())";
mysqli_query($dbc,$query);



mysqli_close($dbc);
?>

<!-- The form -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<ul>
    <li>
<label for="issue">Issue:</label>
<textarea name="issue-msg" rows="4" cols="30" placeholder="What is the problem?" maxlength="200"></textarea>
 </li>

   <br>
<li>
    
<label for="urgency">Urgency</label>
<!-- Dropwdown -->
<select name="urgency-score">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
    <option>9</option>
    <option>10</option>
</select>


</li>


<br>
<li>
<label for="status">Status</label>
<select name="status" >
    <option>new</option>
    <option>in-progress</option>
    <option>completed</option>
    <option>wont-fix</option>
    
</select>

</li>
<br>



<li>
<label for="extint">external</label>
<select name="extint">
    <option>internal</option>
    <option>external</option>
    
    
</select>
</li>
<br>
<li>
<label for="from">owner:</label>
    <input type="text" id="owner" name="owner" value="notset" />
    </li>
    <br />

    <li>
<label for="creator">creator:</label>
<input type="text" id="creator" name="creator" value="Enter Your name"/>
</li>
<br>
<input type="submit" value="add" name="submit"/>
<input type="reset" value="reset" value="reset">
</ul>








</form>
    
</body>
</html>
