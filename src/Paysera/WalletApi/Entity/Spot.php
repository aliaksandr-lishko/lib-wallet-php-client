<?php

class Paysera_WalletApi_Entity_Spot
{
    /**
     * @var int
     */ 
    private $id;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $identifier;

    /**
     * @var Paysera_WalletApi_Entity_SpotInfo
     */
    private $placeInfo;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * 
     * @return Paysera_WalletApi_Entity_Spot
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string @status
     * 
     * @return Paysera_WalletApi_Entity_Spot
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param string $identifier
     * 
     * @return Paysera_WalletApi_Entity_Spot
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * @return Paysera_WalletApi_Entity_SpotInfo
     */
    public function getPlaceInfo()
    {
        return $this->placeInfo;
    }

    /**
     * @param Paysera_WalletApi_Entity_SpotInfo $placeInfo
     * 
     * @return Paysera_WalletApi_Entity_Spot
     */
    public function setPlaceInfo($placeInfo)
    {
        $this->placeInfo = $placeInfo;
        
        return $this;
    }

}