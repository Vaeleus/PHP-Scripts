<?php
  class acEquation {
    public $constant;
    public $coefficient;
    public $power;
    public $variable;

    // Objects of acEquation class must be instantiated with a variable value
    public function __construct($variable) {
      $this->variable = $variable;
    }

    // Method that applies mathematical operators on object's variable
    public function applyOperator($power = 1, $coefficient = 1, $constant = 0) {
      $this->power = $power;
      $this->coefficient = $coefficient;
      $this->constant = $constant;

      // Applies values to variable
      $this->variable = ($this->coefficient * ($this->variable ** $this->power)) + $this->constant;
      return $this->variable;
    }

    public function retEquation() {
      return $this->coefficient."x^".$this->power." + ".$this->constant;
    }
  }
?>
