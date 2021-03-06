<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Quete extends \App\Entity\Quete implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Quete' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Quete' . "\0" . 'descriptif', '' . "\0" . 'App\\Entity\\Quete' . "\0" . 'xp', '' . "\0" . 'App\\Entity\\Quete' . "\0" . 'prix', '' . "\0" . 'App\\Entity\\Quete' . "\0" . 'latitude', '' . "\0" . 'App\\Entity\\Quete' . "\0" . 'longitude', '' . "\0" . 'App\\Entity\\Quete' . "\0" . 'resoudres', '' . "\0" . 'App\\Entity\\Quete' . "\0" . 'acquerirs', '' . "\0" . 'App\\Entity\\Quete' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\Quete' . "\0" . 'rayon'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Quete' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Quete' . "\0" . 'descriptif', '' . "\0" . 'App\\Entity\\Quete' . "\0" . 'xp', '' . "\0" . 'App\\Entity\\Quete' . "\0" . 'prix', '' . "\0" . 'App\\Entity\\Quete' . "\0" . 'latitude', '' . "\0" . 'App\\Entity\\Quete' . "\0" . 'longitude', '' . "\0" . 'App\\Entity\\Quete' . "\0" . 'resoudres', '' . "\0" . 'App\\Entity\\Quete' . "\0" . 'acquerirs', '' . "\0" . 'App\\Entity\\Quete' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\Quete' . "\0" . 'rayon'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Quete $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getDescriptif(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescriptif', []);

        return parent::getDescriptif();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescriptif(string $descriptif): \App\Entity\Quete
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescriptif', [$descriptif]);

        return parent::setDescriptif($descriptif);
    }

    /**
     * {@inheritDoc}
     */
    public function getXp(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getXp', []);

        return parent::getXp();
    }

    /**
     * {@inheritDoc}
     */
    public function setXp(int $xp): \App\Entity\Quete
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setXp', [$xp]);

        return parent::setXp($xp);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrix(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrix', []);

        return parent::getPrix();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrix(int $prix): \App\Entity\Quete
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrix', [$prix]);

        return parent::setPrix($prix);
    }

    /**
     * {@inheritDoc}
     */
    public function getLatitude(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLatitude', []);

        return parent::getLatitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setLatitude(float $latitude): \App\Entity\Quete
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLatitude', [$latitude]);

        return parent::setLatitude($latitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getLongitude(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLongitude', []);

        return parent::getLongitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setLongitude(float $longitude): \App\Entity\Quete
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLongitude', [$longitude]);

        return parent::setLongitude($longitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getResoudres(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResoudres', []);

        return parent::getResoudres();
    }

    /**
     * {@inheritDoc}
     */
    public function addResoudre(\App\Entity\Resoudre $resoudre): \App\Entity\Quete
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addResoudre', [$resoudre]);

        return parent::addResoudre($resoudre);
    }

    /**
     * {@inheritDoc}
     */
    public function removeResoudre(\App\Entity\Resoudre $resoudre): \App\Entity\Quete
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeResoudre', [$resoudre]);

        return parent::removeResoudre($resoudre);
    }

    /**
     * {@inheritDoc}
     */
    public function getAcquerirs(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAcquerirs', []);

        return parent::getAcquerirs();
    }

    /**
     * {@inheritDoc}
     */
    public function addAcquerir(\App\Entity\Acquerir $acquerir): \App\Entity\Quete
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAcquerir', [$acquerir]);

        return parent::addAcquerir($acquerir);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAcquerir(\App\Entity\Acquerir $acquerir): \App\Entity\Quete
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAcquerir', [$acquerir]);

        return parent::removeAcquerir($acquerir);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom(string $nom): \App\Entity\Quete
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getRayon(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRayon', []);

        return parent::getRayon();
    }

    /**
     * {@inheritDoc}
     */
    public function setRayon(int $rayon): \App\Entity\Quete
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRayon', [$rayon]);

        return parent::setRayon($rayon);
    }

}
