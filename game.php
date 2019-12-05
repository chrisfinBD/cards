<?php 

require_once("./card.php");
require_once("./deck.php");


$first_card = new Card();
$first_card->suit = "hearts";
$first_card->value = "5";

$my_cards = array();
array_push($my_cards, $first_card);
$second_card = new Card();
$second_card->suit = "clubs";
$second_card->value = "Jack";

array_push($my_cards, $second_card);

$third_card = new Card();
$third_card->suit = "diamonds";
$third_card->value = "Ace";

array_push($my_cards, $third_card);


$fourth_card = new Card();
$fourth_card->suit = "diamonds";
$fourth_card->value = "Queen";

array_push($my_cards, $fourth_card);
array_push($my_cards, new Card("clubs", "2"));

print_r($my_cards);

$my_deck = new Deck();
$my_deck->cards = $my_cards;
$my_deck->show_cards();
$my_deck->show_cards("diamonds");
?>
