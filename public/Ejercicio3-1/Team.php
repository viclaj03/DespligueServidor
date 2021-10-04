<?php
Class Team{
    private $name;
    private $players;
    private $matches;
    private $won;
    private $lost;
    private $tie;
    private $scoregoals;

    public function __construct($name, $players, $matches, $won, $lost, $tie, $scoregoals)
    {
        $this->name = $name;
        $this->players = $players;
        $this->matches = $matches;
        $this->won = $won;
        $this->lost = $lost;
        $this->tie = $tie;
        $this->scoregoals = $scoregoals;
    }

    public function signPlayer($player){
        array_push($this->players,$player);
    }

    public function render(){
        $html = '';
        foreach ($this->players as $jugador){
            $html .= $jugador->render();
        }
        return $html;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


}