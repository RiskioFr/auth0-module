<?php
namespace Riskio\Auth0Module\Factory;

use Riskio\Auth0Module\Client\Auth0Client;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class Auth0ClientFactory implements FactoryInterface
{
    /**
     * @param  ServiceLocatorInterface $serviceLocator
     * @return Auth0Client
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $options = $serviceLocator->get('Riskio\Auth0Module\Options\Auth0Options');

        return new Auth0Client($options);
    }
}
