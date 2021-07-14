<?php
//First we need know conditional operators

/*
 *  ==      as Equal
 *  ===     as  Equal value and type
 *  <>      as Different
 *  !==     as Different comparing values and type
 *  <       smaller than
 *  >       greater than
 *  <=      smaller or equal than
 *  >=      greater or equal than
 */

/*  IF  */

$movie = 'Aladdin';

if ($movie == 'Aladdin') {
    echo 'anbu, prince abu';
} elseif ($movie == 'Star Wars') {
    echo 'The force be with you';
} else {
    echo 'If variable don\'t coincide with one of other options';
}

/*  SWITCH  */

switch ($movie) {
    case 'Aladdin':
        echo 'anbu, prince abu';
        beak;
    case 'Star Wars':
        echo 'The force be with you';
        beak;
    default:
        echo 'If variable don\'t coincide with one of other options';
        beak;
}

/*  GOTO    */
goto mark;
echo 'line 1';
echo 'line 2';
echo 'line 3';
echo 'line 4';

mark:
echo 'We have skipped the previous lines';