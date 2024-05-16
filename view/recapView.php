<!DOCTYPE html>
<html lang="en">
    <head>
        <title>recap</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <style>
        td,table{
            border: solid 1px black;
        }
        </style>
    <table>
        <thead>
        <th>
            <td>DATE</td>
        </th>
        <th>
            <td>JOURS</td>
        </th>
        <th>
            <td>HORAIRE</td>
        </th>
        <th>
            <td>LOC</td>
        </th>
        <th>
            <td>SURVAILLANT</td>
        </th>
        <th>
            <td>Res.Module</td>
        </th>
        <th>
            <td>niveau</td>
        </th>
        </thead>
        <tbody>
            <?php
                foreach($tab as $t){
                    echo'<tr>
                    <th>
            <td>'.$t['date'].'</td>
        </th>
        <th>
            <td>'.$t['jour'].'</td>
        </th>
        <th>
            <td>'.$t['horaire'].'</td>
        </th>
        <th>
            <td>'.$t['loc'].'</td>
        </th>
        <th>
            <td>'.$t['surveillant'].'</td>
        </th>
        <th>
            <td>'.$t['resModule'].'</td>
        </th>
        <th>
            <td>'.$t['niveau'].'</td>
        </th></tr>';
        
                }
            ?>
        </tbody>
    </table>
    </body>
</html>