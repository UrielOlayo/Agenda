<?php namespace App\Models;

	use CodeIgniter\Model;

 	class categoriasModel extends Model{
 		public function listarCategoria(){
 			$Categorias = $this->db->query("SELECT * FROM t_categorias");
 			return $Categorias->getResult();
 		}
 		public function insertar($datos){
 			$Categorias = $this->db->table('t_categorias');
 			$Categorias->insert($datos);

 			return $this->db->insertID();
 		}

 		public function obtenerCategoria($data){
 			$Categorias = $this->db->table('t_categorias');
 			$Categorias->where($data);
 			return $Categorias->get()->getResultArray();
 		}

 		public function actualizar($data, $idNombre){
 			$Categorias = $this->db->table('t_categorias');
 			$Categorias->set($data);
 			$Categorias->where('id_categoria',$idNombre);
 			return $Categorias->update();
 		}

 		public function eliminar($data){
 			$Categorias = $this->db->table('t_categorias');
 			$Categorias->where($data);
 			return $Categorias->delete();
 		}
 	}