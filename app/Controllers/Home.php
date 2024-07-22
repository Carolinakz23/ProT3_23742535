<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']= 'pagina principal';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/footer_view');
    }

    public function productos()
    {
       $data['titulo']= 'productos';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/productos');
        echo view('front/footer_view');
    }

public function quienes_somos()
    {
        $data['titulo']= 'quienes_somos';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/quienes_somos');
        echo view('front/footer_view');
    }
public function acerca_de()
    {
        $data['titulo']= 'acerca_de';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/acerca_de');
        echo view('front/footer_view');
    }

public function registro()
    {
        $data['titulo']= 'registro';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('back/usuario/registro');
        echo view('front/footer_view');
    }
public function login()
    {
        $data['titulo']= 'login';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer_view');
    }
    public function usuarios()
    {
        $data['titulo'] = 'usuarios'; // Título de la página
        echo view('front/head_view', $data); // Carga la vista del encabezado (head_view.php) con datos
        echo view('front/navbar_view'); // Carga la vista de la barra de navegación (navbar_view.php)
        echo view('back/usuario/usuarios'); // Carga la vista de inicio de sesión de usuario (login.php en Backend/usuario)
        echo view('front/footer_view'); // Carga la vista del pie de página (footer_view.php)
    }



}
