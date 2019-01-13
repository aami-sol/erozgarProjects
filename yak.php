<!DOCTYPE html>
<html>
<head>
    <title>Yak Trips</title>
</head>
<body>
    <table align="center" border="1" cellpadding="18" cellspacing="0" bgcolor="#d8c8ff">
    <?php
        for($i=1;$i<=4;$i++)
        {
        //echo "<tr>";
        echo "<td>Table ".($i+1)."</td>";
        //echo "</tr>";
        }
        ?>
    </table>

    <table align="center" border="1" cellpadding="7" cellspacing="0" bgcolor="#d4d4d4">
        <?php
        for($i=1;$i<=10;$i++)
        {
        echo "<tr>";
        for ($j=2;$j<=5;$j++)
        {
        echo "<td>$j *$i = ".$i*$j."</td>";
        }
        echo "</tr>";
        }
        ?>
    </table>
</body>
</html>