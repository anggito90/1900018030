<html>
<body>
<?php include 'form.php';?>
<?php
    if(!file_exists("form.txt"))
    {
        echo "The file from above cannot be found!";
        exit;
    }
    
    $fp = fopen("form.txt", "r");
    
    if(!$fp)
    {
        echo "Somehow the file cannot be opened! :)";
        exit;
    }
    echo "<table border = 4>";
    $counter = 1;
    while(!feof($fp))
    {
        $zeile = fgets($fp);
        echo "<tr><td>$counter</td>";
        echo "<td>$zeile</td>";
        $counter++;
    }
        echo "</table>";
    fclose($fp)
    
?>


</body>
</html>