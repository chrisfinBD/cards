<?php
class Deck {
	public $cards;


	function show_cards($suit = "all") {

	echo "\nShowing $suit cards:\n";
					foreach($this->cards as $card){
									if ($suit == "all") {
													echo "$card->suit $card->value\n"; }
									elseif ($suit == $card->suit){
													echo "$card->suit $card->value\n"; }


		}
	}	
}

?>
