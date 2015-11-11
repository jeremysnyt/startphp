<?php
class Burger {

	function __construct() {
		$this->{"kung"}	= "fu";
		$this->{"meet"}	= "beef";
		return $this;
	}


}

class Wolf extends Burger {	
}

class Roll {
	function bake() {
		$this->{"temp"}	= 400;
	}
}

#$king	= new Burger();
$king	= new Wolf();
# var_dump( $king );
print json_encode( $king );

$mac	= new Roll();
# var_dump( $mac );

?>
