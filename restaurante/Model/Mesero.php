<?php 
 class Mesero extends AppModel{
 	public $validate = array(
 		'dni'=>array(
 			'regla1'=>array(
 				'rule'=>'notBlank'
 				),
 			'regla2'=>array(
 				'rule'=>'numeric',
 				'message'=>'Solo Numeros'
 				)
 			),
 		'nombre'=>array(
 			'regla1'=>array(
 				'rule'=>'notBlank'
 				)
 			),
 		'apellido'=>array(
 			'regla1'=>array(
 				'rule'=>'notBlank'
 				)
 			),
 		'telefono'=>array(
 			'regla1'=>array(
 				'rule'=>'notBlank'
 				),
 			'regla2'=>array(
 				'rule'=>'numeric',
 				'message'=>'Solo Numeros'
 				)
 			)
 		);
 }
?>