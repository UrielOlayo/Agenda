<?php namespace App\Models;

	use CodeIgniter\Model;

 	class contactosModel extends Model{
 		public function listarContactos(){
 			$Contactos = $this->db->query('SELECT t_contactos.id_contacto, t_contactos.nombre, t_contactos.paterno, t_contactos.materno, t_contactos.telefono, t_contactos.email, t_contactos.id_categoria, t_categorias.categoria FROM t_contactos, t_categorias where t_categorias.id_categoria=t_contactos.id_categoria');
 			return $Contactos->getResult();
 		}
 		public function insertarc($datos){
 			$Contactos = $this->db->table('t_contactos');
 			$Contactos->insert($datos);

 			return $this->db->insertID();
 		}

 		public function obtenerContactos($data){
 			$Contactos = $this->db->table('t_contactos');
 			$Contactos->where($data);
 			return $Contactos->get()->getResultArray();
 		}

 		public function actualizar($data, $idNombre){
 			$Contactos = $this->db->table('t_contactos');
 			$Contactos->set($data);
 			$Contactos->where('id_contacto',$idNombre);
 			return $Contactos->update();
 		}

 		public function eliminar($data){
 			$Contactos = $this->db->table('t_contactos');
 			$Contactos->where($data);
 			return $Contactos->delete();
 		}
 	}