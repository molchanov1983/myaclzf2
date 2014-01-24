<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Myacl\Controller\Index' => 'Myacl\Controller\IndexController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'myacl' => array(
                'type'    => 'Literal',
                'options' => array(
                    // Change this to something specific to your module
                    'route'    => '/myacl',
                    'defaults' => array(
                        // Change this value to reflect the namespace in which
                        // the controllers for your module are found
                        '__NAMESPACE__' => 'Myacl\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'Myacl' => __DIR__ . '/../view',
        ),
    ),
);
