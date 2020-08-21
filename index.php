<?php
#GESTOR DE ENLACES
require_once "controlador/enlaces.php";
require_once "modelo/enlaces.php";
require_once "controlador/template.php";
#GESTOR DE INGRESO A SISTEMA
require_once "controlador/ingreso.php";
require_once "modelo/ingreso.php";
#GESTOR DE HOSPITALES
require_once "modelo/gestorHospitales.php";
require_once "controlador/gestorHospitales.php";
#GESTOR DE INYECTORES
require_once "modelo/gestorinyectores.php";
require_once "controlador/gestorinyectores.php";
#GESTOR DE BITACORAS
require_once "modelo/gestorbitacoras.php";
require_once "controlador/gestorbitacoras.php";
$template = new TemplateController();
$template -> template();
