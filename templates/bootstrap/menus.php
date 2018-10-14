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
			'[[RecentChanges|Recentemente modificados]]',
			array('Perfil' => array(
				'[[<<username>>|Minha página de Usuario]]',
				'[[UserSettings|Configurações]]',
				'<<logout>>',
			)),
		),
		'user' => array(
			'[[Categorias|Categorias]]',
			array('Perfil' => array(
				'[[<<username>>|Minha página de usuario]]',
				'[[UserSettings|Configurações]]',
				'<<logout>>',
			)),
		),
		'default' => array(
			'[[Categorias|Categorias]]',
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
			'{{clonelink}}',
			'{{historylink}}',
			'{{revisionlink}}',
			'{{ownerlink}}'
		),
		'default' => array(
			'{{historylink}}',
			'{{revisionlink}}',
			'{{ownerlink}}',
		),
	),
);
