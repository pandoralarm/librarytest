<?php

namespace App\Controllers;

class User extends BaseController
{


    public function __construct()
    {
      // Create a new class manually
      $this->usermodel = new \App\Models\Usermodel();
      $this->request = \Config\Services::request();
    }

    public function index()
    {
      return "ok";
    }

    public function login()
    {
      echo view('layout/header');
      echo view('comps/login');
      echo view('layout/footer.php');
    }


    public function auth()
    {
      $userid = $this->request->getVar('email');
      $user = $this->usermodel->find($userid);
    }
}
