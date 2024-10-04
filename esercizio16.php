<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function stampaTabella($m, $n){ //m=righe n=colonne
            $tabella="";
            for ($i=0; $i<$m; $i++){
                $row="";
                for ($j=0; $j<$n; $j++){
                    $row=$row."<td style='border: 1px, solid, black; border-collapse:collapse; padding:10px'> ($i,$j) </td>";

                }
                $tabella=$tabella."<tr >".$row."</tr>";
            }
            $tabella= "<table style=' border-collapse:collapse;' >".$tabella."</table";
            echo $tabella;
        }

        stampaTabella(4,10);
    ?>
</body>
</html>