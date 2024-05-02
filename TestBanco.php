<?php 

include_once 'Persona.php';
include_once 'Cliente.php';
include_once 'Cuenta.php';
include_once 'CuentaCorriente.php';
include_once 'CajaDeAhorro.php';
include_once 'Banco.php';

/**
 * ! **********************************************************
 * ! *********************[BANCO]******************************
 * ! **********************************************************
 */

$objBanco = new Banco([], [], 0, []);

/**
 * ! **********************************************************
 * ! *********************[CLIENTES]***************************
 * ! **********************************************************
 */

$objCliente1 = new Cliente(43372217, "Erick", "Gonzalez", "1");
$objCliente2 = new Cliente(43372272, "Milagros", "Argañaraz", "2");
$objBanco->incorporarCliente($objCliente1);
$objBanco->incorporarCliente($objCliente2);


/**
 * ! **********************************************************
 * ! *********************[CUENTAS CORRIENTES]*****************
 * ! **********************************************************
 */

$objCuentaCorriente1 = new CuentaCorriente(0, 0, "",0 );
$objCuentaCorriente2 = new CuentaCorriente(0, 0, "",0 );
$objBanco->incorporarCuentaCorriente("1", 5000);
$objBanco->incorporarCuentaCorriente("2", 5000);


/**
 * ! **********************************************************
 * ! *********************[CAJAS DE AHORRO]********************
 * ! **********************************************************
 */

$objCajaDeAhorro1 = new CajaDeAhorro(0, 0, "");
$objCajaDeAhorro2 = new CajaDeAhorro(0, 0, "");
$objCajaDeAhorro3 = new CajaDeAhorro(0, 0, "");
$objBanco->incorporarCajaAhorro(1);
$objBanco->incorporarCajaAhorro(1);
$objBanco->incorporarCajaAhorro(2);
$objBanco->realizarDeposito(3, 300);
$objBanco->realizarDeposito(4, 300);
$objBanco->realizarDeposito(5, 300);
$objBanco->realizarRetiro(1, 150);
echo $objBanco;



















/**
 * ! TEST QUE REALIZE PARA COMPROBAR SU FUNCIONAMIENTO. 
 * !
 */
// $objCliente1 = new Cliente(437372, "Erick", "Gonzalez", "1234");
// $objCliente2 = new Cliente(376463, "Carlos", "Sanchez", "1235");
// $objCliente3 = new Cliente(543621, "Damian", "Cortez", "78835");
// $col_clientes = [$objCliente1, $objCliente2];
// $objCuentaCorriente1 = new CuentaCorriente("1234", 4587, "Erick", 2000);
// $objCuentaCorriente2 = new CuentaCorriente("1235", 1500, "Carlos", 2500);
// $col_cuentaCorriente = [$objCuentaCorriente1, $objCuentaCorriente2];
// $objCuentaAhorro1 = new CajaDeAhorro(12345, 1500, "Pedro");
// $objCuentaAhorro2 = new CajaDeAhorro(12346, 2000, "Juan");
// $col_cuentaAhorro = [$objCuentaAhorro1, $objCuentaAhorro2];
// $objBanco = new Banco($col_cuentaCorriente,$col_cuentaAhorro , 1600, $col_clientes);
// $objBanco->incorporarCliente($objCliente3); //TODO:Funciona 100%
// $objBanco->incorporarCuentaCorriente(78835, 2000); //TODO:Funciona 100%
// $objBanco->buscarCliente(12344); //TODO:Funciona 100%
// $objBanco->incorporarCajaAhorro(1234); //TODO:Funciona 100%
// $objBanco->buscarCuenta(1601); //TODO:Funciona 100%
// $objBanco->realizarDeposito(1601, 5000); //TODO:Funciona 100%
// echo $objBanco->realizarRetiro(1601, 3500); //TODO:Funciona 100%
