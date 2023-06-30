<?php

namespace App\Controllers;
use App\Models\Dht11;

class Rest extends BaseController
{
    public function index(){
        echo view('charts/grafica');
    }

    /*public function listar(){
        $model = new Dht11();
        $array = $model->findAll();
        echo '<pre>'; 
        print_r($array); 
        echo '</pre>';
    }*/

    public function datosGraficas(){ 
        $graficaModel=new Dht11();
        $data=$graficaModel->findAll();
        echo json_encode($data);
    } 

    public function espPost(){
     if ($this->request->getPost()){ 
            $model = new Dht11();
            $data=[ 
                'temperatura'=>$this->request->getVar('temperatura'),
                'humedad'=>$this->request->getVar('humedad'),
                'indice'=>$this->request->getVar('indice')
            ];
            $model->insert($data);
            return "201";
        }
            return "401"; 
    }
}
