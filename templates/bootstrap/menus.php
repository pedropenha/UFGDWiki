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
			'[[Sobre]]',
			'[[http://192.168.25.82/cadastros|Suporte]]',
			array('Perfil' => array(
				'[[<<username>>|Minha página de Usuario]]',
				'[[UserSettings|Configurações]]',
				'<<logout>>',
			)),
		),
		'user' => array(
			'[[Categorias|Categorias]]',
            '[[Sobre]]',
			array('Perfil' => array(
				'[[<<username>>|Minha página de usuario]]',
				'[[UserSettings|Configurações]]',
				'<<logout>>',
			)),
		),
		'default' => array(
			'[[Categorias|Categorias]]',
            '[[Sobre]]',
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
