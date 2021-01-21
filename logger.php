<?php
    $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
    if (isset($_POST["end"])) {
        $trajanje = ($_POST["end"] - $_POST["start"]);
        $txt ="Vrijeme zadržavanja:". $trajanje/1000 . "\n";
        fwrite($myfile, $txt);
        fclose($myfile);
    }

?>