<?php

	/*----------  
	Ruta o dominio del servidor 
	----------*/
	const SERVERURL="http://localhost/TIENDA/";


	/*----------  
	Nombre de la empresa o compañia 
	----------*/
	const COMPANY="Basic Look";


	/*----------  Idioma - Language
	Español -> es 
	----------*/
	const LANG="es";

	
	/*----------  
		Palabra clave dashboard
		No usar los siguientes valores

		index | product | bag | registration | details | signin
	----------*/
	const DASHBOARD="admin";


	/*----------  
	Nombre de la sesion
	----------*/
	const SESSION_NAME="STO";


	/*----------  Redes sociales  ----------*/
	const FACEBOOK="https://www.facebook.com/profile.php?id=100076782428685";
	const INSTAGRAM=" ";
	const YOUTUBE=" ";
	const TWITTER=" ";


	/*----------  Direccion ----------*/
	const COUNTRY="México";
	const ADDRESS="México, San Juan del Rio, Querétaro, Barrio del Espiritu Santo";
	

	/*----------  Configuración de moneda  ----------*/
	const COIN_SYMBOL="$";
	const COIN_NAME="MXN";
	const COIN_DECIMALS="2";
	const COIN_SEPARATOR_THOUSAND=",";
	const COIN_SEPARATOR_DECIMAL=".";


	/*----------  Tipos de documentos ----------*/
	const DOCUMENTS_USERS=["DNI","Cedula","DUI","Licencia","Pasaporte","Otro"];
	const DOCUMENTS_COMPANY=["DNI","Cedula","RUT","NIT","RUC","Otro"];


	/*----------  Tipos de unidades de productos ----------*/
	const PRODUTS_UNITS=["Unidad","Libra","Kilogramo","Caja","Paquete","Lata","Galon","Botella","Tira","Sobre","Bolsa","Saco","Tarjeta","Otro"];

	/*----------  Límite de tamaño de imágenes de productos en MB - Product image size limit in MB ----------*/
	const COVER_PRODUCT=3;
	const GALLERY_PRODUCT=7;


	/*----------  Marcador de campos obligatorios ----------*/
	const FIELD_OBLIGATORY='&nbsp; <i class="fab fa-font-awesome-alt"></i> &nbsp;';


	/*----------  Configuración de codigos de barras 

		BARCODE_FORMAT -> CODE128 | CODE39 | EAN | EAN-13 | EAN-8 | EAN-5 | EAN-2 | UPC | ITF | ITF-14 | MSI | MSI10 | MSI11 | MSI1010 | MSI1110 | Pharmacode

		BARCODE_TEXT_ALIGN -> center | left | right

		BARCODE_TEXT_POSITION -> top | bottom

	----------*/

	const BARCODE_FORMAT="CODE128";
	const BARCODE_TEXT_ALIGN="center";
	const BARCODE_TEXT_POSITION="bottom";


	/*----------  Tamaño de papel de impresora termica (en milimetros) 
		THERMAL_PRINT_SIZE -> 80 | 57
	----------*/
	const THERMAL_PRINT_SIZE="80";


	/*----------  Zona horaria  ----------*/
	date_default_timezone_set("America/Mexico_City");

	/*
		Configuración de zona horaria de tu país, para más información visita
		
		http://php.net/manual/es/function.date-default-timezone-set.php
		http://php.net/manual/es/timezones.php
	*/