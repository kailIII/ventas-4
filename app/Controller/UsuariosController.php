<?php
class UsuariosController extends AppController {
	var $name = 'Usuarios';
	var $uses = array();  
	

function index(){
	
	if (!empty($this->data)){
	
	$someone = $this->Usuario->findByUsuario($this->data['Usuario']['usuario']);
				
	if(!empty($someone['Usuario']['contrasena']) && $someone['Usuario']['contrasena'] == md5($this->data['Usuario']['contrasena'])){
	     $this->Session->write('Usuario', $someone['Usuario']);
         $this->redirect(array('controller'=>'Ventas' ,'action'=>'index'),null,true);
	}else{
		$this->Session->setFlash('Usuario y contraseña incorrectos');
		$this->redirect(array('action'=>'index'),null,true);
	}   
	}
}

}
?>