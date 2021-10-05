<?php
Class Team{
    private $name;
    private $members;
    private $matches;
    private $won;
    private $lost;
    private $tie;
    private $scoregoals;

    public function __construct($name, $members, $matches, $won, $lost, $tie, $scoregoals)
    {
        $this->name = $name;
        $this->members = $members;
        $this->matches = $matches;
        $this->won = $won;
        $this->lost = $lost;
        $this->tie = $tie;
        $this->scoregoals = $scoregoals;
    }

    public function signPlayer($player){
        array_push($this->members,$player);
    }

    public function render(){
        $html = '';
        foreach ($this->members as $jugador){
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