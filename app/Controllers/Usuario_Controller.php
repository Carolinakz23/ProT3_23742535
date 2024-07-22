<?php 
namespace App\Controllers;
use App\Models\Usuario_Model; // Asegúrate de que el namespace sea correcto
use CodeIgniter\Controller;

class Usuario_Controller extends Controller {

    public function __construct() {
        helper(['form', 'url']);
    }

    public function create() {
        $data['titulo'] = 'Registro';
        echo view('front/head_view', $data); // Corrección: Pasar $data a la vista
        echo view('front/navbar_view');
        echo view('back/usuario/registro');
        echo view('front/footer_view');
    }
      
    public function formValidation() {
        // Validación de campos del formulario    
        $rules = [
            'nombre'   => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'usuario'  => 'required|min_length[3]',
            'email'    => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'pass'     => 'required|min_length[3]|max_length[10]',
        ];

        $input = $this->validate($rules);

        $formModel = new Usuario_Model(); // Asegúrate de que el nombre del modelo coincida con el namespace

        if (!$input) {
            $data['titulo'] = 'Registro';
            echo view('front/head_view', $data);
            echo view('front/navbar_view');
            echo view('back/usuario/registro', ['validation' => $this->validator]); // Pasar el objeto validator a la vista
            echo view('front/footer_view');
        } else {
            $formModel->save([
                // Si la validación es exitosa, guarda los datos del usuario en la base de datos
                'nombre' => $this->request->getPost('nombre'),
                'apellido' => $this->request->getPost('apellido'),
                'usuario' => $this->request->getPost('usuario'),
                'email' => $this->request->getPost('email'),
                'pass' => password_hash($this->request->getPost('pass'), PASSWORD_DEFAULT)
            ]);
            
            session()->setFlashdata('success','Usuario registrado con exito');
            return $this->response->redirect('registro');
        }
    }
}