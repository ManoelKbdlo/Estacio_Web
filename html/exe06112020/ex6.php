<?php

    $mes = $_GET["mes"];

switch   ($mes) {
    case "1":
        print "janeiro";
        print "<p>";
        break;
    case "2":
        print "fevereiro";
        print "<p>";
         break;
    case "3":
        print "março";
        print "<p>";
         break;
    case "4":
        print "abril";
        print "<p>";
         break;
    case "5":
        print "maio";
        print "<p>";
         break;    
    case "6":
        print "junho";
        print "<p>";
         break; 
    case "7":
        print "julho";
        print "<p>";
         break; 
    case "8":
        print "agosto";
        print "<p>";
         break; 
    case "9":
        print "setembro";
        print "<p>";
         break; 
    case "10":
        print "outubro";
        print "<p>";
         break; 
    case "11":
        print "novembro";
        print "<p>";
         break;
    case "12":
        print "dezembro";
        print "<p>";
         break;  
    default :
        print "não exite o mes informado";
        print "<p>";
         break;                 


}
?>