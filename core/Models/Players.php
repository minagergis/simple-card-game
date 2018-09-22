<?php



class Players {

    private $playerName;
    private $playerCardBag;


    function __construct()
    {
        $this->playerName = '';
        $this->playerCardBag =[];

    }

    /**
     * PlayerName Var Setter
     * @param mixed $playerName
     */
    public function setPlayerName($playerName)
    {
        $this->playerName = $playerName;
    }

    /**
     * PlayerName Var Getter
     * @return mixed
     */
    public function getPlayerName()
    {
        return $this->playerName;
    }

    /**
     * PlayerCardBag Var Setter
     * the card bag is the variable which contains all cards with this player
     * @param mixed $playerCardBag
     */
    public function setPlayerCardBag($playerCardBag)
    {
        $this->playerCardBag = $playerCardBag;
    }

    /**
     * PlayerCardBag Var Getter
     * @return mixed
     */
    public function getPlayerCardBag()
    {
        return $this->playerCardBag;
    }





}