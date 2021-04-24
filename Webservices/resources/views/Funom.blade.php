@extends('Plantilla')

    @section('Matris')
    
<br><br>
<div class="container">
    <?php 
    
    $noche=$_GET['p'];
    $playa=$_GET['q'];

    function juan($nombres,$apellidos){
        
        $lol = explode(" ", $nombres);
        $goku = explode(" ", $apellidos);
        $luci=count($lol);
        $germ=count($goku);
        
        if($germ < 2){
        
        	?><h3>Error//Debe ingresar Apellido Paterno y Apellido Materno</h3><?php
        				}
        else {
        
            ?><br><h3>Nombres</h3><?php
        for($ger=0;$ger < $luci;$ger++){
        	$lol = array_reverse($lol);
            echo "  [Nombre ",$ger+1,": ",array_pop($lol),"]";?><br><?php


            $lol = array_reverse($lol);
        }

        ?><br><h3>Apellidos</h3><?php

        for($german=0;$german < $germ;$german++){
        	if($german==0){
           		$goku = array_reverse($goku);
            	echo "  [Apellido Paterno : ",array_pop($goku),"]";?><br><?php
            	$goku = array_reverse($goku);
            			}
            if($german==1) {
            	$goku = array_reverse($goku);
            	echo "  [Apellido Materno : ",array_pop($goku),"]";?><br><?php
            	$goku = array_reverse($goku);
            }
            
            if($german!=0 && $german!=1) {
            	$goku = array_reverse($goku);
            	echo "  [Apellido ",$german+1," : ",array_pop($goku),"]";?><br><?php
            	$goku = array_reverse($goku);
            }
            
        }           
        
        	}
        
    }

        juan($noche,$playa);

    
    ?>

    </div>

    @endsection
