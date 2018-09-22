<?php
require_once('core/autoload.php');

/**
 * Intialization for the cards and the player
 */
$player1 = new PlayersController();
$player2 = new PlayersController();
$player3 = new PlayersController();
$player4 = new PlayersController();
$cards = new CardsController();

/**
 * Shuffling the deck cards and giving the players their random cards
 */
//Shuffling the deck cards
$deckCards = $cards->getDeckShuffled();

/***************************************** Giving Player Card Module **************************************/

// Giving the player No.1 his 7 cards
$player1Cards = $cards->getRandomCards($deckCards, 7);
// intialize the player and give him his cards
$player1->setPlayerOptions('Freek', $player1Cards);
//remove the player1 cards from the deck cards.
$deckCards = $cards->updateDeckCards($deckCards, $player1Cards);

$player2Cards = $cards->getRandomCards($deckCards, 7);
$player2->setPlayerOptions('Bas', $player2Cards);
$deckCards = $cards->updateDeckCards($deckCards, $player2Cards);

$player3Cards = $cards->getRandomCards($deckCards, 7);
$player3->setPlayerOptions('Henk', $player3Cards);
$deckCards = $cards->updateDeckCards($deckCards, $player3Cards);

$player4Cards = $cards->getRandomCards($deckCards, 7);
$player4->setPlayerOptions('Pieter', $player4Cards);
$deckCards = $cards->updateDeckCards($deckCards, $player4Cards);

/***************************************** Giving Player Card Module End **************************************/

/***************************************** Showing Player Card Module **************************************/
/**
 * Showing the cards of each player before playing
 */
echo $player1->getPlayerName() . ' has been dealt: ';
foreach ($player1->getPlayerCards() as $card1) {
    echo $card1 . ' ';
}
echo '<br>';

echo $player2->getPlayerName() . ' has been dealt: ';
foreach ($player2->getPlayerCards() as $card2) {
    echo $card2 . ' ';
}
echo '<br>';

echo $player3->getPlayerName() . ' has been dealt: ';
foreach ($player3->getPlayerCards() as $card3) {
    echo $card3 . ' ';
}
echo '<br>';

echo $player4->getPlayerName() . ' has been dealt: ';
foreach ($player4->getPlayerCards() as $card4) {
    echo $card4 . ' ';
}
echo '<br>';

/***************************************** Showing Player Card Module End **************************************/


// get a random card from the deck to be the top card
$topCard = $cards->getRandomCards($deckCards, 1);
$deckCards = $cards->updateDeckCards($deckCards, $topCard);
$topCard = $topCard[0];

// showing the top card
echo $topCard;
echo '<br>';
$players = [$player1, $player2, $player3, $player4];

// A While loop to run the game if the deck still have cards
while (count($cards->getDeckCards()) > 0) {

    foreach ($players as $player) {

        $playedCard = $player->hasLikeThisCard($topCard);
        // if the player has suitable card
        if ($playedCard) {
            echo $player->getPlayerName() . ' Plays ' . $playedCard;
            echo '</br>';
            echo '</br>';
            echo '</br>';
            // the player will play the card so it will be removed from his card bag
            $player->removeCardFromPlayerBag([$playedCard]);
            // now the played card will be the top card
            $topCard = $playedCard;

            // i hashed this step because i didn't understand it the player should put the card on the deck again or keep it outside the game
            //$cards->insertCardDeck([$playedCard]);

            // if the player has no cards after playing the last card he will win
            if (count($player->getPlayerCards()) == 0) {
                echo $player->getPlayerName() . 'has wons';
                echo '</br>';
                echo '</br>';
                echo '</br>';
                break;
            }
        }
        // if the player hasn't a suitable card to play
        else {
            // if there are cards on the deck
            if (count($cards->getDeckCards()) > 0) {

                //the player will take a card from a deck and pass the turn
                $pulledCard = $cards->getRandomCards($cards->getDeckCards(), 1);
                $cards->updateDeckCards($cards->getDeckCards(), $pulledCard);
                $player->insertCardToPlayerBag($pulledCard);
                echo $player->getPlayerName() . ' does not have	a suitable card, taking	from deck ' . $pulledCard[0];
                echo '</br>';
                echo '</br>';
                echo '</br>';
            }
            // if there is no cards left on deck
            else {
                // the player who has the less number of cards will win
                $cardsNumber = [$player1->getPlayerName() => count($player1->getPlayerCards()), $player2->getPlayerName() => count($player2->getPlayerCards()), $player3->getPlayerName() => count($player3->getPlayerCards()), $player4->getPlayerName() => count($player4->getPlayerCards())];
                $winnerName = array_search(min($cardsNumber), $cardsNumber);
                echo $winnerName . ' Has Won !';
                echo '</br>';
                echo '</br>';
                echo '</br>';
                echo '</br>';
                echo '</br>';
                break;
            }
        }
        //die();
    }


}

?>