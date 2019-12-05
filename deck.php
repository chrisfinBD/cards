<?php
class Deck {
	public $cards = array();


	function show_cards() {
		foreach($this->cards as $card){
						echo "$card->suit $card->value\n";
		}
	}	
}

?>
