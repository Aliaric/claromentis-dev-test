<?php

/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 07/03/2018
 * Time: 16:28
 */

// Remove not actual CSV file
unlink('expenses_summary.csv');
$target_dir = "/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
}

// Allow CSV file formats
else if(!empty($FileType) && $FileType != "csv") {
  echo "Sorry, only CSV files are allowed.";
}

// Last check and build the table
else if (isset ($_FILES['fileToUpload'])) {

  $uploaded_csv = fopen($_FILES["fileToUpload"]["tmp_name"], 'r');
  $saved_csv_with_summary = fopen('expenses_summary.csv', 'w');

  print "<table style='border-collapse: collapse;'>";

  while (($line = fgetcsv($uploaded_csv)) !== FALSE) {
    $summary = $line[1] * $line[2];
    print "<tr style='width: 100px'>";
    print "<td  style='border: 1px solid black; width: 100px;'>" .
      $line[0] .
      "</td>" .
      "<td  style='border: 1px solid black; width: 100px;'>" .
      $summary .
      "</td>";
    print "<tr>";

    fputcsv($saved_csv_with_summary, [$line[0], $summary]);
  }
  fclose($saved_csv_with_summary);
  fclose($uploaded_csv);
  print "</table>";
  print "Download this report as CSV - 
    <a href=\"/expenses_summary.csv\" target=\"_blank\">click here</a>";
}
?>
<div><br /><br /><br /></div>
<form action="index.php" method="post" enctype="multipart/form-data">
  Upload a new CSV file<br />
  <input type="file" name="fileToUpload" id="csvToUpload"><br />
  <input type="submit" value="Upload" name="Upload">
</form>
