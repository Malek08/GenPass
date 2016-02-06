<?php 

class GenPass {
  
  private $DIGIT = 10;		// init digit count
	
  private $CARACS = array(
  'a','b','c','d','e','f','g','h','i','j','k','l','m',
  'n','o','p','q','r','s','t','u','v','w','x','y','z',
  '0','1','2','3','4','5','6','7','8','9','#','$','@'); // caracs allowed for generation
  
  public function __construct ($digit) {
	$this->setDigit($digit); 
	}
  
// accessor
  public function getDigit () {
    return $this->DIGIT;
  }
  
//set the digit count
  public function setDigit ($newdigit) {
    if (is_numeric($newdigit) && !empty($newdigit)) {
      $this->DIGIT = $newdigit;      
    }
  }
  
  public function getCarac () {
    return $this->CARACS;
  }
  
  public function setCarac ($newtab) {
    if (is_array($newtab)) {
      $this->CARACS = $newtab;
    }
  }
  
// generate password length depend on digit count
  public function Generator () {
    $chaine = null;
    for ($cpt=0; $cpt < $this->DIGIT; $cpt++) {
      $i = Rand(0, sizeof($this->CARACS)-1);
      $chaine .= $this->CARACS[$i];
    }
  return $chaine;
  }
  
}

?>