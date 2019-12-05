<?php

class Card {
	public $suit;
	public $value;

	function __construct($suit = "", $value = "")
	{
					$this->suit = $suit;
					$this->value = $value;
	}
}
?>
