<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PropiedadModel;

class Propiedad extends BaseController
{

    protected $helpers = ['form'];

    public function index()
    {
        $this->mostrar($nav = null);
    }

    public function agregar()
    {
        $session = session();
        if ($session->get('logged_in') == true) {
            $propiedadModel = model('PropiedadModel');
            $data['propiedades'] = $propiedadModel->findAll();
            $data['title'] = "Agregar popiedad";

            //$propiedadModel = model('PropiedadModel');
            //helper(['form', 'url']);
            //$propiedadModel = model('PropiedadModel');
            //$data['propiedades'] = $propiedadModel->findAll();

            $validation = \Config\Services::validation();
            if (strtolower($this->request->getMethod()) === 'get') {
                return
                    view('common/head', $data) .
                    view('common/menu') .
                    view('propiedad/agregar', $data) .
                    view('common/footer');
            }

            $rules = [
                'title_property' => 'required|min_length[3]',
                'state' => 'required|min_length[3]',
                'municipality' => 'required|min_length[3]',
                'town' => 'required|min_length[3]',
                'kind_property' => 'required|min_length[3]',
                'measures' => 'required',
                'cost' => 'required',
                'name_property' => 'required|min_length[3]',
                'phone' => 'required',
            ];

            if (!$this->validate($rules)) {
                return view('common/head, $data')
                    . view('common/menu')
                    . view('propiedad/agregar', $data, ['validation' => $validation])
                    . view('common/footer');
            } else {
               // $propiedadModel = model('PropiedadModel');
                //$data = [
                //'title_property' => $this->request->getPost('title_property'),
                //'state' => $this->request->getPost('state'),
                //'municipality' => $this->request->getPost('municipality'),
                //'town' => $this->request->getPost('town'),
                //'kind_property' => $this->request->getPost('kind_property'),
                //'measures' => $this->request->getPost('measures'),
                //'cost' => $this->request->getPost('cost'),
                //'name_property' => $this->request->getPost('name_property'),
                //'phone' => $this->request->getPost('phone'),

                //];

                $propiedadModel->insert($data);
                if ($this->insert()) {
                    return redirect()->to(base_url('propiedad/mostrar', 'refresh'));
                }
            }
        } else {
            return redirect()->to('usuario/login');
        }
    }

    public function insert()
    {
        $propiedadModel = model('PropiedadModel');
        $data = [
            'title_property' => $_POST['title_property'],
            'state' => $_POST['state'],
            'municipality' => $_POST['municipality'],
            'town' => $_POST['town'],
            'kind_property' => $_POST['kind_property'],
            'measures' => $_POST['measures'],
            'cost' => $_POST['cost'],
            'name_property' => $_POST['name_property'],
            'phone' => $_POST['phone'],
        ];

        $propiedadModel->insert($data, false);
        return true;
    }

    public function mostrar()
    {
        $propiedadModel = new PropiedadModel();
        $propiedades = $propiedadModel->findAll();
        
        $data = [
            'propiedades' => $propiedades
        ];

        return
            view('common/head') .
            view('common/menu') .
            view('propiedades/mostrar', $data) .
            view('common/footer');
    }

    public function delete($id)
    {
        $propiedadModel = model('PropiedadModel');
        $propiedadModel->delete($id);
        return redirect('propiedad/mostrar', 'refresh');
    }

    public function editar($id)
    {
        $propiedadModel = model('PropiedadModel');
        $data['propiedad'] = $propiedadModel->find($id);
        return
            view('common/head') .
            view('common/menu') .
            view('propiedad/editar', $data) .
            view('common/footer');
    }

    public function update()
    {
        $propiedadModel = model('PropiedadModel');
        $data = array(
            'title_property' => $_POST['title_property'],
            'state' => $_POST['state'],
            'municipality' => $_POST['municipality'],
            'town' => $_POST['town'],
            'kind_property' => $_POST['kind_property'],
            'measures' => $_POST['measures'],
            'cost' => $_POST['cost'],
            'name_property' => $_POST['name_property'],
            'phone' => $_POST['phone'],
        );

        $propiedadModel->update($_POST['id'], $data);
        return redirect('propiedad/mostrar', 'refresh');
    }

    public function buscar()
    {


        return
            view('common/head') .
            view('common/menu') .
            view('propiedad/buscar') .
            view('common/footer');
    }

    public function estadistica()
    {
    }
}
