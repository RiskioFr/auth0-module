<?php
namespace Riskio\Auth0ModuleTest\Factory;

use Riskio\Auth0Module\Factory\Auth0ServiceFactory;

class Auth0ServiceFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateInstance()
    {
        $authServiceDummy = $this->getMockBuilder('Zend\Authentication\AuthenticationServiceInterface')
            ->disableOriginalConstructor()
            ->getMock();

        $returnValueMap = [
            ['Riskio\Auth0Module\Authentication\AuthenticationService', $authServiceDummy],
        ];

        $serviceManagerStub = $this->getMock('Zend\ServiceManager\ServiceLocatorInterface');
        $serviceManagerStub
            ->method('get')
            ->will($this->returnValueMap($returnValueMap));

        $factory = new Auth0ServiceFactory();

        $service = $factory->createService($serviceManagerStub);
        $this->assertInstanceOf('Riskio\Auth0Module\Service\Auth0Service', $service);
    }
}
