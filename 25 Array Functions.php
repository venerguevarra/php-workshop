<?php
    // 1
    $name = "foobar";
    // convert string to array
    $pieces = str_split( $name );
    // reverse the array order
    $reverse = array_reverse( $pieces );
    // convert array back to string
    $backward = implode( "", $reverse);
    // Outputs: raboof
    echo $backward;

    // 2
    $deck = array( "Ace", "King", "Queen", "Jack", "Joker" );
    shuffle($deck);
    // randomize array
    for($i = 0; $i < count($deck); $i++) {
        printf("\$deck[%d]: %s<br />", $i, $deck[$i]);
    }

    // 3
    $torah = array( "Genesis", "Exodus", "Leviticus", "Numbers", "Deuteronomy" );
    sort( $torah );
    // sort array by value
    for ( $i = 0; $i < count($torah); $i++ ) {
        printf( "\$torah[%d]: %s<br />", $i, $torah[$i] );
    }

    // 4 Quick way to prints the content of an array
    print_r($torah);

    // 5 array_walk
    function printRow( $value, $key ) {
        echo ("
            <tr>
                <td> $key </td>
                <td> $value </td>

            </tr>\n
        ");
    }
    $color = array( 'Red' => '#FF0000',
                    'Green' => '#00FF00',
                    'Blue' => '#0000FF',
                    'Yellow' => '#FFFF00' );
    echo("<table border=1>");
    array_walk( $color, 'printRow' );
    echo("</table>");
?>