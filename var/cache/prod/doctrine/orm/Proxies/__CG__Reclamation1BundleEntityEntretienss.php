<?php

namespace Proxies\__CG__\Reclamation1Bundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Entretienss extends \Reclamation1Bundle\Entity\Entretienss implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Reclamation1Bundle\\Entity\\Entretienss' . "\0" . 'refEnt', '' . "\0" . 'Reclamation1Bundle\\Entity\\Entretienss' . "\0" . 'idEntreprise', '' . "\0" . 'Reclamation1Bundle\\Entity\\Entretienss' . "\0" . 'idCondidat', '' . "\0" . 'Reclamation1Bundle\\Entity\\Entretienss' . "\0" . 'posteEnt', '' . "\0" . 'Reclamation1Bundle\\Entity\\Entretienss' . "\0" . 'dateEnt', '' . "\0" . 'Reclamation1Bundle\\Entity\\Entretienss' . "\0" . 'heureEnt', '' . "\0" . 'Reclamation1Bundle\\Entity\\Entretienss' . "\0" . 'descriptionEnt'];
        }

        return ['__isInitialized__', '' . "\0" . 'Reclamation1Bundle\\Entity\\Entretienss' . "\0" . 'refEnt', '' . "\0" . 'Reclamation1Bundle\\Entity\\Entretienss' . "\0" . 'idEntreprise', '' . "\0" . 'Reclamation1Bundle\\Entity\\Entretienss' . "\0" . 'idCondidat', '' . "\0" . 'Reclamation1Bundle\\Entity\\Entretienss' . "\0" . 'posteEnt', '' . "\0" . 'Reclamation1Bundle\\Entity\\Entretienss' . "\0" . 'dateEnt', '' . "\0" . 'Reclamation1Bundle\\Entity\\Entretienss' . "\0" . 'heureEnt', '' . "\0" . 'Reclamation1Bundle\\Entity\\Entretienss' . "\0" . 'descriptionEnt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Entretienss $proxy) {
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
    public function getRefEnt()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getRefEnt();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRefEnt', []);

        return parent::getRefEnt();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdEntreprise($idEntreprise)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdEntreprise', [$idEntreprise]);

        return parent::setIdEntreprise($idEntreprise);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdEntreprise()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdEntreprise', []);

        return parent::getIdEntreprise();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdCondidat($idCondidat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdCondidat', [$idCondidat]);

        return parent::setIdCondidat($idCondidat);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdCondidat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdCondidat', []);

        return parent::getIdCondidat();
    }

    /**
     * {@inheritDoc}
     */
    public function setPosteEnt($posteEnt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPosteEnt', [$posteEnt]);

        return parent::setPosteEnt($posteEnt);
    }

    /**
     * {@inheritDoc}
     */
    public function getPosteEnt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPosteEnt', []);

        return parent::getPosteEnt();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateEnt($dateEnt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateEnt', [$dateEnt]);

        return parent::setDateEnt($dateEnt);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateEnt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateEnt', []);

        return parent::getDateEnt();
    }

    /**
     * {@inheritDoc}
     */
    public function setHeureEnt($heureEnt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHeureEnt', [$heureEnt]);

        return parent::setHeureEnt($heureEnt);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeureEnt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeureEnt', []);

        return parent::getHeureEnt();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescriptionEnt($descriptionEnt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescriptionEnt', [$descriptionEnt]);

        return parent::setDescriptionEnt($descriptionEnt);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescriptionEnt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescriptionEnt', []);

        return parent::getDescriptionEnt();
    }

}
