<?php

global $BootstrapMenus;
$BootstrapMenus = array(
	'main_menu' => array(
		'admin' => array(
			array('Admin' => array(
				'AdminUsers',
				'AdminPages',
				'SysInfo',
				'WikkaConfig'
			)),
			'[[Categorias|Categorias]]',
			'RecentChanges',
			'RecentlyCommented',
			array('Profile' => array(
				'[[<<username>>|Minha página de Usuario]]',
				'[[UserSettings|Configurações]]',
				'<<logout>>',
			)),
		),
		'user' => array(
			'[[Categorias|Categorias]]',
			'RecentChanges',
			'RecentlyCommented',
			array('Profile' => array(
				'[[<<username>>|Minha página de usuario]]',
				'[[UserSettings|Configurações]]',
				'<<logout>>',
			)),
		),
		'default' => array(
			'[[Categorias|Categorias]]',
			'RecentlyCommented',
			'[[UserSettings|Entrar/Cadastrar-se]]',
		)
	),

	'options_menu' => array(
		'admin' => array(
            '{{newpage menu="1" size="20"}}',
			'{{editlink}}',
			'{{revertlink}}',
			'{{deletelink}}',
			'{{clonelink}}',
			'{{historylink}}',
			'{{revisionlink}}',
			'{{ownerlink}}',
			'{{referrerslink}}'
		),
		'user' => array(
            '{{newpage menu="1" size="20"}}',
			'{{editlink}}',
			'{{clonelink}}',
			'{{historylink}}',
			'{{revisionlink}}',
			'{{ownerlink}}'
		),
		'default' => array(
			'{{editlink}}',
			'{{historylink}}',
			'{{revisionlink}}',
			'{{ownerlink}}',
			'Your hostname is {{whoami}}'
		),
	),
);
