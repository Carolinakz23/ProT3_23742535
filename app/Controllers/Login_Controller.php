<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuario_Model; // Asegúrate de importar el Model correctamente

class Login_Controller extends BaseController
{
    public function index()
    {
        helper(['form', 'url']);

        $data['titulo'] = 'login';
        echo view('front/head_view', $data); // Corrección: Pasar $data a la vista
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer_view');
    }

    public function auth()
    {
        $session = session();
        $model = new Usuario_Model();

        // Trae los datos del formulario
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('pass');
        
        $data = $model->where('email', $email)->first();
        if ($data) {
            $pass = $data['pass']; 
            $ba = $data['baja']; // Asegúrate de que el campo en la base de datos se llama 'baja'
            if ($ba == 'SI') {
                $session->setFlashdata('msg', 'Usuario dado de baja');
                return redirect()->to('/login');
            }

            // Verifica los datos ingresados
            $verify_pass = password_verify($password, $pass);

            if ($verify_pass) {
                $ses_data = [
                    'id_usuario' => $data['id_usuario'],
                    'nombre' => $data['nombre'],
                    'apellido' => $data['apellido'],
                    'email' => $data['email'],
                    'usuario' => $data['usuario'],
                    'perfil_id' => $data['perfil_id'],
                    'logged_in' => TRUE
                ];

                //Si se cumple la verificacion inicia sesion
                $session->set($ses_data);
                session()->setFlashdata('msg', 'Bienvenido!');
                return redirect()->to('/panel');

                //Cmbiar el return de panel a pagina 
                
            }else{
                //No pasa la verificacion
                $session->setFlashdata('msg','Contraseña Incorrecta');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg','No existe el usuario - Usuario incorrecto');
            return redirect()->to('/login');
        }
    }

    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}