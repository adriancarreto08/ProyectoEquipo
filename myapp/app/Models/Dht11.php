<?php 
namespace App\Models;

use CodeIgniter\Model;

class Dht11 extends Model{
    protected $table      = 'dht11';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['temperatura','humedad','indice'];
}