<?php
# --------------
# -- Programmer:  Zachary Rener
# -- Course:      ITSE-1306 (Intro to PHP)
# -- Instructor:  Cesar "Coach" Marrero
# -- Assignment:  Week 12 - Lab
# -- Description: Prints the contents of a csv file into a table
# ---------------

echo '
<table class="mt-5">
    <tr>
        <th>Last</th>
        <th>First</th>
        <th>Salary</th>
    </tr>
';

$file = fopen("data.csv", "r");
# Each line of the file is kept in the $data array for future use
$data;  $i = 0;
while(!feof($file)):
    $singleCsvLine = fgetcsv($file);
    $data[$i++] = $singleCsvLine;
    echo "<tr>" .
         "<td>$singleCsvLine[0]</td>" . 
         "<td>$singleCsvLine[1]</td>" .
         "<td>$singleCsvLine[2]</td>" .
         "</tr>";
endwhile;
fclose($file);

echo '</table>';

?>