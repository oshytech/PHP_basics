<!-- If is necessary we can create constants, are similar to basic variables, but in this case
the value is not modifiable -->
<?php

define('constantVariable', 'constantValue');

//To access constant values we don't need use $
echo constantVariable;

//It is possible to define local variables with the same name as a constant,
// but this is not recommended as it can lead to errors

$constantVariable = 'notConstant';
echo 'Constant: ' . $constantVariable . ' Local: ' . $constantVariable;
