<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'login::index');
$routes->get('/produtos', 'ProdutoController::index');
$routes->get('/departamento', 'DepartamentoController::index');
$routes->get('/compras', 'ComprasController::index');
//$routes->post('');
