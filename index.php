<?php 

require_once("genpass.class.php");

$DIGIT = 20;

if (isset($_GET['digit']) && is_numeric($_GET['digit']) && !empty($_GET['digit']))
 { $DIGIT = $_GET['digit']; }
 
$GEN = new GenPass($DIGIT);

echo "Password Generator<hr />
<form method='get'>
<input type='text' value='".$DIGIT."' name='digit' />
<input type='submit' value='CHANGE DIGIT' />
</form>";

echo "Password generated (<i>digit: ".$GEN->getDigit()."</i>) : <br />
<input type='text' value='".$GEN->Generator()."' size='".($GEN->getDigit()+20)."' /> <a href=''>refresh</a>";

?>