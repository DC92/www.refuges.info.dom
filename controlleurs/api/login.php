<?php
include_once("identification.php");
include_once("entetes_http.php");

$info_login = [
  "creation_time" => $infos_identification->creation_time,
  "login_form_token" => $infos_identification->login_form_token,
  "session_id" => $infos_identification->session_id,
  "user_id" => $infos_identification->user_id,
  "username" => $infos_identification->username
];

include($config_wri['chemin_vues'].'api/login.vue.'.$_REQUEST['format']);

