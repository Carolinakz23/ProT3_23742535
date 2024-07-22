<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Panel_Controller extends Controller
{
    public function index()
    {
        $session = session();
        $nombre = $session->get('usuario');
        $perfil = $session->get('perfil_id');

        $data['perfil_id'] = $perfil;
        $dato['titulo'] = 'panel del usuario'; // Título de la página
        
        echo view('front/head_view', $dato); // Carga la vista del encabezado (head_view.php) con datos
        echo view('front/navbar_view'); // Carga la vista de la barra de navegación (navbar_view.php)
        echo view('back/usuario/usuario_logueado', $data); // Carga la vista del panel del usuario (usuario_logueado.php) con datos del perfil
        echo view('front/footer_view'); // Carga la vista del pie de página (footer_view.php)
    }
}
