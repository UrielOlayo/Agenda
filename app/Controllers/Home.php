<?php

namespace App\Controllers;

use App\Models\categoriasModel;
use App\Models\contactosModel;

class Home extends BaseController
{
	public function index()
	{
		return view('index');
	}

	public function categoria()
	{
		$Crud = new categoriasModel();
		$datos = $Crud->listarCategoria();

		$mensaje = session('mensaje');

		$data = [
			"datos" => $datos,
			"mensaje" => $mensaje
		];
		return view('categoria', $data);
	}
	public function contactos()
	{
		$Crud = new contactosModel();
		$datos = $Crud->listarContactos();

		$mensaje = session('mensaje');

		$data = [
			"datos" => $datos,
			"mensaje" => $mensaje
		];
		return view('contactos', $data);
	}
	public function crear()
	{
		$datos = [
			"categoria" => $_POST['categoria'],
			"descripcion" => $_POST['descripcion']
		];
		$Crud = new categoriasModel();
		$respuesta = $Crud->insertar($datos);

		if ($respuesta > 0) {
			return redirect()->to(base_url() . '/Categorias')->with('mensaje', '1');
		} else {
			return redirect()->to(base_url() . '/Categorias')->with('mensaje', '0');
		}
	}

	public function editar($idNombre)
	{
		$data = ["id_categoria" => $idNombre];
		$Crud = new categoriasModel();
		$respuesta = $Crud->obtenerCategoria($data);

		$datos = ["datos" => $respuesta];

		return view('actualizarcat', $datos);
	}

	public function actualizar()
	{
		$datos = [
			"categoria" => $_POST['categoria'],
			"descripcion" => $_POST['descripcion']
		];
		$idNombre =  $_POST['idNombre'];

		$Crud = new categoriasModel();

		$respuesta = $Crud->actualizar($datos, $idNombre);

		if ($respuesta) {
			return redirect()->to(base_url() . '/Categorias')->with('mensaje', '2');
		} else {
			return redirect()->to(base_url() . '/Categorias')->with('mensaje', '3');
		}
	}

	public function eliminar($idNombre)
	{
		$Crud = new categoriasModel();
		$data = ["id_categoria" => $idNombre];

		$respuesta = $Crud->eliminar($data);

		if ($respuesta) {
			return redirect()->to(base_url() . '/Categorias')->with('mensaje', '4');
		} else {
			return redirect()->to(base_url() . '/Categorias')->with('mensaje', '5');
		}
	}

	public function crearc()
	{
		$datos = [
			"nombre" => $_POST['nombre'],
			"paterno" => $_POST['paterno'],
			"materno" => $_POST['materno'],
			"telefono" => $_POST['telefono'],
			"email" => $_POST['email'],
			"id_categoria" => $_POST['id_categoria']
		];
		$Crud = new contactosModel();
		$respuesta = $Crud->insertarc($datos);

		if ($respuesta > 0) {
			return redirect()->to(base_url() . '/Contactos')->with('mensaje', '1');
		} else {
			return redirect()->to(base_url() . '/Contactos')->with('mensaje', '0');
		}
	}

	public function editarc($idNombre)
	{
		$data = ["id_contacto" => $idNombre];
		$Crud = new contactosModel();
		$respuesta = $Crud->obtenerContactos($data);

		$datos = ["datos" => $respuesta];

		return view('actualizarcont', $datos);
	}

	public function actualizarc()
	{
		$datos = [
			"nombre" => $_POST['nombre'],
			"paterno" => $_POST['paterno'],
			"materno" => $_POST['materno'],
			"telefono" => $_POST['telefono'],
			"email" => $_POST['email'],
			"id_categoria" => $_POST['id_categoria']
		];
		$idNombre =  $_POST['idNombre'];

		$Crud = new contactosModel();

		$respuesta = $Crud->actualizar($datos, $idNombre);

		if ($respuesta) {
			return redirect()->to(base_url() . '/Contactos')->with('mensaje', '2');
		} else {
			return redirect()->to(base_url() . '/Contactos')->with('mensaje', '3');
		}
	}

	public function eliminarc($idNombre)
	{
		$Crud = new contactosModel();
		$data = ["id_contacto" => $idNombre];

		$respuesta = $Crud->eliminar($data);

		if ($respuesta) {
			return redirect()->to(base_url() . '/Contactos')->with('mensaje', '4');
		} else {
			return redirect()->to(base_url() . '/Contactos')->with('mensaje', '5');
		}
	}
	//--------------------------------------------------------------------

}
