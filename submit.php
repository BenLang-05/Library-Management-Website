<?php

    $file = 'records.csv';
    $current=file_get_contents($file);

    $title = $_POST['title'];
    $author = $_POST['author'];
    $year = $_POST['year'];
    $journal = $_POST['journal'];
    $doi = $_POST['doi'];
    $school = $_POST['school'];

    $current .= $title . "," . $author . "," . $year . "," . $journal . "," . $doi . "," . $school . "\n";
    file_put_contents($file, $current);
    header("Location: newRecord.php");

?>
