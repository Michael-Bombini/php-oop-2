<?php 

class CreditCard{
    private $cardNumber;
    private $cvv;
    private $expiryDate;


    function __construct($_cardNumber , $_cvv , $_expiryDate)
    {
        $this->setCardNumber($_cardNumber);
        $this->setCvv($_cvv);
        $this->setExpiryDate($_expiryDate);
    }


    /**
     * Get the value of cardNumber
     */ 
    protected function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * Set the value of cardNumber
     *
     * @return  self
     */ 
    protected function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    /**
     * Get the value of cvv
     */ 
    protected function getCvv()
    {
        return $this->cvv;
    }

    /**
     * Set the value of cvv
     *
     * @return  self
     */ 
    protected function setCvv($cvv)
    {
        $this->cvv = $cvv;

        return $this;
    }

    /**
     * Get the value of expiryDate
     */ 
    protected function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * Set the value of expiryDate
     *
     * @return  self
     */ 
    protected function setExpiryDate($expiryDate)
    {
        $this->expiryDate = $expiryDate;

        return $this;
    }


    protected function isExpired(){
      $expire = $this->getExpiryDate;
      $expire = strtotime($expire);
      $todayMonthYear = date("m") + date("y");
      if($expire> $todayMonthYear){
        return ;
      }
      
    }


    
}