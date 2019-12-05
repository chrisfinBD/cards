<?php 

require_once("./card.php");
require_once("./deck.php");


$first_card = new Card();
$first_card->suit = "hearts";
$first_card->value = "5";

$my_cards = array();
array_push($my_cards, $first_card);

print_r($my_cards);

$my_deck = new Deck();
$my_deck->cards = $my_cards;
$my_deck->show_cards();
?>
