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
			'[[CategoryCategory|Categories]]',
			'RecentChanges',
			'RecentlyCommented',
			array('Profile' => array(
				'[[<<username>>|My User Page]]',
				'[[UserSettings|Settings]]',
				'<<logout>>',
			)),
		),
		'user' => array(
			'[[CategoryCategory|Categories]]',
			'RecentChanges',
			'RecentlyCommented',
			array('Profile' => array(
				'[[<<username>>|My User Page]]',
				'[[UserSettings|Settings]]',
				'<<logout>>',
			)),
		),
		'default' => array(
			'[[Categorias|Categorias]]',
			'[[CategoryCategory|Categories]]',
			'RecentlyCommented',
			'[[UserSettings|Login/Register]]',
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
