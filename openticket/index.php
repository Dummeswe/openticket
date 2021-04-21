<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Open ticket main window</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    

</head>

<body>
    
   

    <?php
    require_once('connectvars.php');
    /* connect to database */
    $dbc = $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    /* Get the data from mysql */
    $query = "SELECT * FROM `ticket`  
    ORDER BY `ticket`.`timestamp` DESC";/* Newest first */
    $data = mysqli_query($dbc, $query);

    /* Loop throiug array This is really bad i know, i will fix it */
    echo '<table>';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>Issue Msg</th>';
    echo '<th>Urgency</th>';
    echo '<th>Status</th>';
    echo '<th>Ext Int</th>';
    echo '<th>Owner</th>';
    echo '<th>Creator</th>';
    echo '<th>Timestamp</th>';
    echo '</tr>';
    /* end of table header */
    /* Display ticket data */
    $i = 0;
    while ($row = mysqli_fetch_array($data)) {
        echo '<tr>';
        echo '<td>' . $row['ID'] . '</td>';
        /*  */
        echo '<td>' . $row['issue_string'] . '</td>';

        echo '<td>' . $row['urgency'] . '</td>';

        echo '<td>' . $row['status'] . '</td>';

        echo '<td>' . $row['external_or_internal'] . '</td>';

        echo '<td>' . $row['owner'] . '</td>';

        echo '<td>' . $row['creator'] . '</td>';

        echo '<td>' . $row['timestamp'] . '</td>';
    }


    ?>

</body>
</html>
