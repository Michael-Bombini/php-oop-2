<?php 

trait AvaibilityProduct{
    private $startingMonth;
    private $endingMonth;




    /**
     * Get the value of startingMonth
     */ 
    public function getStartingMonth()
    {
        return $this->startingMonth;
    }

    /**
     * Set the value of startingMonth
     *
     * @return  self
     */ 
    public function setStartingMonth($startingMonth)
    {
        $this->startingMonth = $startingMonth;

        return $this;
    }

    /**
     * Get the value of endingMonth
     */ 
    public function getEndingMonth()
    {
        return $this->endingMonth;
    }

    /**
     * Set the value of endingMonth
     *
     * @return  self
     */ 
    public function setEndingMonth($endingMonth)
    {
        $this->endingMonth = $endingMonth;

        return $this;
    }
}
