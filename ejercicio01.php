<?php
// Pedimos al usuario que ingrese el importe total vendido del mes y la cantidad de hijos en edad escolar
$importeTotalVendido = $_POST["importeTotalVendido"];
$cantidadHijos = $_POST["cantidadHijos"];

// Calculamos la bonificación
$bonificacion = $cantidadHijos * 50;

// Calculamos la comisión
$comision = $importeTotalVendido * 0.075;

// Calculamos el sueldo bruto
$sueldoBruto = 600 + $comision + $bonificacion;

// Calculamos el descuento
$descuento = $sueldoBruto * 0.11;

// Calculamos el sueldo neto
$sueldoNeto = $sueldoBruto - $descuento;

// Mostramos los resultados
echo "Bonificación: S/. " . number_format($bonificacion, 2) . "\n";
echo "Comisión: S/. " . number_format($comision, 2) . "\n";
echo "Sueldo bruto: S/. " . number_format($sueldoBruto, 2) . "\n";
echo "Descuento: S/. " . number_format($descuento, 2) . "\n";
echo "Sueldo neto: S/. " . number_format($sueldoNeto, 2) . "\n";
?>