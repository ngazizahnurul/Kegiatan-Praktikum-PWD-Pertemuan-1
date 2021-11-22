<?php
$filecounter="counter.txt";
$fileoad=fopen($filecounter,"r+");
$hit = fread($fileoad,filesize($filecounter));
echo ("<table width=250 align=center border=1 cellspacing=0 cellspadding=0 bordercolor=#0000FF><tr>");
echo("<td width =250 valign=minddle align=center>");
echo("<font face=verdana size=2 color=#FF0000><b>");
echo("Anda pengunjung yang ke :");
echo ($hit);
echo("</b></font>");
echo ("/td");
echo("</tr></table>");
fclose($fileoad);

$fl=fopen($filecounter,"w+");
$hit=$hit+1;
fwrite($fl,$hit,strlen($hit));
fclose($fl);
?>