<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use \IonAuth\Libraries\IonAuth;
use Psr\Log\LoggerInterface;

class Auth extends BaseController
{
    var $IonAuth;

    function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->IonAuth = new IonAuth();
    }
    

    public function index()
    {
        //
    }

    public function login() {
        if (isset($this->session->error)) {
            $data['error'] = $this->session->error;
        } else {
            $data['error'] = "";
        }
        




        echo view("loginform", $data);
    }

    public function loginSend() {
        $login = $this->request->getPost('email');
        $password = $this->request->getPost('pswd');

        $logged = $this->IonAuth->login($login, $password);

        if($logged) {
            return redirect() ->to('admin/dashboard');
        } else {
            $this->session->setFlashdata('error','Zadali jste špatné přihlašovací jméno nebo heslo');
            return redirect() ->to('login');
        }

        
    }

    public function register() {
        
        




        echo view("registerform");
    }
}
