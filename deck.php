<?php
class Deck {
	public $cards;


	function show_cards() {
		foreach($this->cards as $card){
						echo "$card->suit $card->value\n";
		}
	}	
}

?>
