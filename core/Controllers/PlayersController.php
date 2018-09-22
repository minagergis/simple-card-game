<?php
require_once('core/autoload.php');


class PlayersController
{

    private $Player;

    function __construct()
    {
        $this->Player = new Players();

    }

    /**
     * Function to set player options (Name , Card bag)
     * @param $playerName
     * @param $playerCardBag
     * @return bool
     */
    public function setPlayerOptions($playerName, $playerCardBag)
    {
        $this->Player->setPlayerName($playerName);
        $this->Player->setPlayerCardBag($playerCardBag);
        return true;

    }

    /**
     * Player Name Getter
     * @return mixed
     */
    public function getPlayerName()
    {
        return $this->Player->getPlayerName();
    }

    /**
     * Player Card Getter
     * @return mixed
     */

    public function getPlayerCards()
    {
        return $this->Player->getPlayerCardBag();
    }

    /**
     * @return mixed
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * Function to know if the player has suitable card to play or not
     * @param $card
     * @return bool
     */
    public function hasLikeThisCard($card)
    {
        $card = explode(' ', $card);
        $face = $card[0];
        $suit = $card[1];
        foreach ($this->getPlayerCards() as $playerCard) {
            if (strpos($playerCard, $face) != false or strpos($playerCard, $suit) != false) {
                $cardShouldBePlayed = $playerCard;
                break;
            }
        }

        if (isset($cardShouldBePlayed)) {
            return $cardShouldBePlayed;
        } else {
            return false;
        }

    }


    /**
     * Function to remove the played card from the player bag
     * @param $cards
     * @return mixed
     */
    public function removeCardFromPlayerBag($cards)
    {
        $playerCard = $this->Player->getPlayerCardBag();
        $updatedPlayerCard = array_diff($playerCard, $cards);
        $this->Player->setPlayerCardBag($updatedPlayerCard);
        return $this->Player->getPlayerCardBag();
    }

    /**
     * Function to add a card to the player card bag
     * @param $cards
     * @return mixed
     */
    public function insertCardToPlayerBag($cards){
        $playerCard = $this->Player->getPlayerCardBag();
        foreach ($cards as $card){
            array_push($playerCard,$card);
        }

        $this->Player->setPlayerCardBag($playerCard);
        return $this->Player->getPlayerCardBag();
    }

}