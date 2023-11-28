<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Login extends BaseController
{

    public function index()
    {
        if (strtolower($this->request->getMethod()) === 'post') {

            $UserModel = new UserModel();

            $email = $_POST['email'];
            $contra = $_POST['contra'];

            $array = array(
                'email' => $email,
                'password' => $contra
            );

            $resultado = $UserModel->where($array)->findAll();

            if (count($resultado) > 0) {
                $session = session();

                $newdata = [
                    'email' => $email,
                    'password' => $contra,
                    'logged_in' => true,
                ];

                $session->set($newdata);
                return view("/Propiedades/mostrar");
            } else {
                return redirect()->to("usuario/login");
            }
        } else {
            return view("usuario/login");
        }
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to("usuario/login");
    }
}
