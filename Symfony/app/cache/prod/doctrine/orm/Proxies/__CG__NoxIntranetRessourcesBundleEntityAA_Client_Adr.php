<?php

namespace Proxies\__CG__\NoxIntranet\RessourcesBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class AA_Client_Adr extends \NoxIntranet\RessourcesBundle\Entity\AA_Client_Adr implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Client_Adr' . "\0" . 'id', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Client_Adr' . "\0" . 'nClientAdr', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Client_Adr' . "\0" . 'nClient', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Client_Adr' . "\0" . 'tel', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Client_Adr' . "\0" . 'fax', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Client_Adr' . "\0" . 'email', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Client_Adr' . "\0" . 'nomVille', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Client_Adr' . "\0" . 'nomPays', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Client_Adr' . "\0" . 'codePostal', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Client_Adr' . "\0" . 'adresse1', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Client_Adr' . "\0" . 'adresse2', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Client_Adr' . "\0" . 'adresse3'];
        }

        return ['__isInitialized__', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Client_Adr' . "\0" . 'id', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Client_Adr' . "\0" . 'nClientAdr', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Client_Adr' . "\0" . 'nClient', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Client_Adr' . "\0" . 'tel', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Client_Adr' . "\0" . 'fax', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Client_Adr' . "\0" . 'email', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Client_Adr' . "\0" . 'nomVille', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Client_Adr' . "\0" . 'nomPays', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Client_Adr' . "\0" . 'codePostal', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Client_Adr' . "\0" . 'adresse1', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Client_Adr' . "\0" . 'adresse2', '' . "\0" . 'NoxIntranet\\RessourcesBundle\\Entity\\AA_Client_Adr' . "\0" . 'adresse3'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (AA_Client_Adr $proxy) {
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
    public function getId()
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
    public function setNClient($nClient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNClient', [$nClient]);

        return parent::setNClient($nClient);
    }

    /**
     * {@inheritDoc}
     */
    public function getNClient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNClient', []);

        return parent::getNClient();
    }

    /**
     * {@inheritDoc}
     */
    public function setTel($tel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTel', [$tel]);

        return parent::setTel($tel);
    }

    /**
     * {@inheritDoc}
     */
    public function getTel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTel', []);

        return parent::getTel();
    }

    /**
     * {@inheritDoc}
     */
    public function setFax($fax)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFax', [$fax]);

        return parent::setFax($fax);
    }

    /**
     * {@inheritDoc}
     */
    public function getFax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFax', []);

        return parent::getFax();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomVille($nomVille)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomVille', [$nomVille]);

        return parent::setNomVille($nomVille);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomVille()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomVille', []);

        return parent::getNomVille();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomPays($nomPays)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomPays', [$nomPays]);

        return parent::setNomPays($nomPays);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomPays()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomPays', []);

        return parent::getNomPays();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodePostal($codePostal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodePostal', [$codePostal]);

        return parent::setCodePostal($codePostal);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodePostal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodePostal', []);

        return parent::getCodePostal();
    }

    /**
     * {@inheritDoc}
     */
    public function setNClientAdr($nClientAdr)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNClientAdr', [$nClientAdr]);

        return parent::setNClientAdr($nClientAdr);
    }

    /**
     * {@inheritDoc}
     */
    public function getNClientAdr()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNClientAdr', []);

        return parent::getNClientAdr();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse1($adresse1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse1', [$adresse1]);

        return parent::setAdresse1($adresse1);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse1', []);

        return parent::getAdresse1();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse2($adresse2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse2', [$adresse2]);

        return parent::setAdresse2($adresse2);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse2', []);

        return parent::getAdresse2();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse3($adresse3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse3', [$adresse3]);

        return parent::setAdresse3($adresse3);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse3', []);

        return parent::getAdresse3();
    }

}
