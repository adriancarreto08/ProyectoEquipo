<?php
namespace App\Controllers;

use App\Models\Dht11;

class CarretoController extends BaseController
{
    public function index()
    {                   
        helper(['html']);

        $CarretoModel = new Dht11();
        $data['datos'] = $CarretoModel->findAll();
     
        echo view('user/tabla',$data);
        
      
        
    }
    




}