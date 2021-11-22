<?
    $mydir = "c:/wamp/www/NIM/";
    $dir = opendir($mydir);
    echo "isi folder (klik link untuk download : <br>";
    while($tmp = readdir($dir)){
        echo "<a href ='$tmp' target='_blank'>$tmp</a><br>";
    }
    closedir($dir);
    ?>