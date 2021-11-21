<?php

namespace ContainerPFp1H4A;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCartService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Classe\Cart' shared autowired service.
     *
     * @return \App\Controller\Classe\Cart
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Classe'.\DIRECTORY_SEPARATOR.'Cart.php';

        return $container->services['App\\Controller\\Classe\\Cart'] = new \App\Controller\Classe\Cart(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['session'] ?? $container->load('getSessionService')));
    }
}
