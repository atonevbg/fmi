<?php
// http://p0l0.binware.org/index.php/2012/02/18/zend-framework-2-authentication-acl-using-eventmanager/
// First I created an extra config for ACL (could be also in module.config.php, but I prefer to have it in a separated file)
return array(
    'acl' => array(
        'roles' => array(
            'guest'   => null,
            'member'  => 'guest'
        ),
        'resources' => array(
            'allow' => array(
//-                'user' => array(
//-                    'login' => 'guest',
//-                    'all'   => 'member'
//-                )
				'CsnUser\Controller\UserDoctrineSimpleAuthorizationAcl' => array(
//					'all'   => 'guest',
					'index'	=> 'guest',
					'create' => 'member'
				),
				'CsnUser\Controller\UserDoctrinePureAcl' => array(
					'all'   => 'member',
				),
				'Application\Controller\Index' => array(
					'all'   => 'guest'					
				),
				'Auth\Controller\Index' => array(
					// 'index' => 'guest',
                    // 'all'   => 'member',	
					'all'   => 'guest'					
				),
				'zfcuser' => array( // zg-commoms ZfcUser
					// 'index' => 'guest',
                    // 'all'   => 'member',
					'all'   => 'guest'					
				),
				'Auth\Controller\Hello' => array(
					'all'   => 'guest'					
				),
				'Auth\Controller\FormTests' => array(
					'all'   => 'guest'					
				),
				'AuthDoctrine\Controller\Index' => array(
					'all'   => 'guest'
					// 'all'   => 'member',					
				),
            )
        )
    )
);
