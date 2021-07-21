<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

use Application\Model\User;
use Application\Model\UserTable;
use Application\Controller\IndexController;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\ModuleManager\Feature\ConfigProviderInterface;

use Zend\Db\Adapter\AdapterInterface;



class Module
{
    const VERSION = '3.1.4dev';    

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

    public function getControllerConfig(){
       return [
        'factories' => [
           IndexController::class => function($container){
              return new IndexController($container->get(UserTable::class));
           }
        ]
       ];
    }
  // Add this method:

    public function getServiceConfig()
    {
        return [

            'factories' => [
                UserTable::class => function($container) {
                    $tableGateway = $container->get(Model\UserTableGateway::class);
                    return new UserTable($tableGateway);
                },            
                Model\UserTableGateway::class => function ($container) {
                    $dbAdapter = $container->get(AdapterInterface::class);
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new User());
                    return new TableGateway('users', $dbAdapter, null, $resultSetPrototype);
                },  
            ],
        ];
    }  
       
}
