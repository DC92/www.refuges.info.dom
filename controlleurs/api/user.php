<?php
include_once('identification.php');
include_once('entetes_http.php');

if ($infos_identification->user_id > 1)
	// Infos user
	$user_data = [
		'username' => $infos_identification->username,
		'user_id' => $infos_identification->user_id,
		'session_id' => $infos_identification->session_id,
	];
else
	// Infos de connexion
	$user_data = [
		'action' => '/forum/ucp.php?mode=login',
		'creation_time' => $infos_identification->creation_time,
		'creation_time' => $infos_identification->creation_time,
		'login_form_token' => $infos_identification->login_form_token,
	];

include($config_wri['chemin_vues'].'api/user.vue.'.$_REQUEST['format'].'.php');

