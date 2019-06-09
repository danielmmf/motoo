<?php

/*
|--------------------------------------------------------------------------
| routerlication Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an routerlication.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', 'CoreController@index');
$router->get('/motoo', 'CoreController@motoo');
$router->get('/usuario', 'CoreController@usuario');
$router->get('/airportzoom', 'UbersController@index');
//$router->get('/airportzoom/driver/register', 'UbersController@reg_driver');
$router->get('/airportzoom/driver/login', 'UbersController@driver_login');
$router->get('/airportzoom/admin/login', 'UbersController@admin_login');
$router->post('/airportzoom/driver/logar', 'UbersController@driver_logar');
$router->post('/airportzoom/admin/logar', 'UbersController@admin_logar');
$router->post('/airportzoom/driver/save', 'UbersController@save_driver');
$router->post('/airportzoom/car/save', 'UbersController@save_car');
$router->get('/airportzoom/driver/test', 'UbersController@test_driver');
$router->get('/airportzoom/driver-profile', 'UbersController@driver_profile');
$router->get('/airportzoom/company-login', 'UbersController@company_login');
$router->post('/airportzoom/company-logar', 'UbersController@company_logar');
$router->get('/airportzoom/company-criar', 'UbersController@company_criar');

$router->get('/uber/admin', 'UbersController@admin');
$router->post('/uber/acha_motorista', 'UbersController@acha_motorista');
$router->get('/airportzoom/admin/companys','UbersController@admin_companys');
$router->post('/airportzoom/company/save','UbersController@save_company');
$router->get('/airportzoom/admin/drivers','UbersController@admin_drivers');
$router->get('/airportzoom/admin/cars','UbersController@admin_cars');

$router->get('/airportzoom/driver-profile', 'UbersController@driver_profile');
$router->post('/airportzoom/company/drivers','UbersController@company_drivers');
$router->post('/airportzoom/company/cars','UbersController@company_cars');
$router->get('/uber/company', 'UbersController@company');
$router->get('/uber', 'UbersController@index');
$router->get('/uber/home', 'UbersController@home');
$router->get('/uber/solicitado', 'UbersController@solicitado');
$router->get('/core/home', 'CoreController@home');
$router->get('/uber/profile', 'UbersController@profile');
$router->get('/uber/registrar', 'UbersController@registrar');
$router->post('/uber/registrar_usuario', 'UbersController@registrar_usuario');
$router->get('/uber/driver', 'UbersController@motorista');
$router->get('/mobilidade/driver', 'UbersController@driver');
$router->get('/airportzoom/motorista', 'UbersController@motorista');
$router->get('/qualrole/nighter', 'UbersController@nighter');
$router->get('/uber/geo', 'UbersController@geo');
$router->get('/vimeo/api', 'VimeoController@api');
$router->get('/vimeo', 'VimeoController@index');

$router->get('del-valle', 'DelValleController@index');
$router->get('del-valle/registrar', 'DelValleController@registrar');
$router->get('del-valle/registrar-segundo', 'DelValleController@registrar_dois');
$router->post('del-valle/registrar-segundo', 'DelValleController@registrar_segundo');
$router->get('del-valle/registrar-terceiro', 'DelValleController@registrar_tres');
$router->post('del-valle/registrar-terceiro', 'DelValleController@registrar_terceiro');
$router->get('del-valle/minha-pagina', 'DelValleController@minha_pagina');
$router->get('del-valle/profile', 'DelValleController@profile');
$router->get('del-valle/login', 'DelValleController@login');
$router->get('del-valle/faq', 'DelValleController@faq');
$router->get('del-valle/fale', 'DelValleController@fale');
$router->get('del-valle/recuperar', 'DelValleController@recuperar');
$router->post('del-valle/validar_cpf', 'DelValleController@validar_cpf');
$router->get('del-valle/treinamentos', 'DelValleController@treinamentos');
$router->get('del-valle/painel-treinamentos', 'DelValleController@admin_treinamentos');
$router->get('del-valle/novo-treinamento/{mes}', 'DelValleController@novo_treinamento');
$router->get('del-valle/treinamento', 'DelValleController@treinamento');
$router->get('del-valle/criaquiz', 'DelValleController@cria_quiz');
$router->post('del-valle/novo-quiz', 'DelValleController@novo_quiz');
//$router->get('del-valle/novo-treinamento/{mes}', 'DelValleController@novo_treinamento');




$router->get('del-valle/cria', 'DelValleController@cria_user');
$router->get('del-valle/apaga', 'DelValleController@apaga');
$router->get('del-valle/test', 'DelValleController@testando');
$router->get('del-valle/carrega', 'DelValleController@load_users');
$router->get('del-valle/load/{score_file}', 'DelValleController@load_scores');

$router->get('/carna-dev', 'CarnaDevController@index');
$router->get('/carna-dev/home', 'CarnaDevController@home');


$router->get('/role', 'RoleController@index');
