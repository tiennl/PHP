<?php
    if ( 123 == "123" ) print ("Equality 1\n");
    if ( 123 == "100"+23 ) print ("Equality 2\n");
    if ( FALSE == "0" ) print ("Equality 3\n");
    if ( (5 < 6) == "2"-"1" ) print ("Equality 4\n");
    if ( (5 < 6) === TRUE ) print ("Equality 5\n");
?>