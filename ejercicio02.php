<?php

// Datos de entrada
$precioGaseosa = $_POST["precio"]; // Precio actual de la gaseosa de 3 litros
$cantidadGaseosas = $_POST["cantidad"]; // Cantidad de gaseosas adquiridas

// Cálculos
$precioDescuento = $precioGaseosa * 0.95; // Precio con el descuento del 5%
$importeCompra = $cantidadGaseosas * $precioDescuento; // Importe total de la compra
$importeDescuento = $importeCompra * 0.07; // Importe del descuento del 7%
$importePagar = $importeCompra - $importeDescuento; // Importe a pagar
$cantidadCaramelos = $cantidadGaseosas * 2; // Cantidad de caramelos de obsequio

// Resultados
echo "Nuevo precio de la gaseosa de 3 litros: S/ " . number_format($precioDescuento, 2) . "\n";
echo "Importe total de la compra: S/ " . number_format($importeCompra, 2) . "\n";
echo "Importe del descuento: S/ " . number_format($importeDescuento, 2) . "\n";
echo "Importe a pagar: S/ " . number_format($importePagar, 2) . "\n";
echo "Cantidad de caramelos de obsequio: " . $cantidadCaramelos . "\n";

?>