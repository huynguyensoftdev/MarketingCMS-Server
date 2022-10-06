<?php

namespace App\Controllers;

use App\Models\PostModel;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
class Postapi extends ResourceController
{ 
  protected $PostModel = 'App\Models\PostModel';
  protected $format ='json';
  use ResponseTrait;
    // show posts list
    public function index()
    {
        $PostModel = new PostModel();
        $data=$PostModel->orderBy('post_id', 'DESC')->findAll();
        return $this->respond($data);
    }
    public function show($post_id = null)
    {
        $model = new PostModel();
        $data = $model->getWhere(['post_id' => $post_id])->getResult();
        if($data){
            return $this->respond($data);
            //require_once('show.php',$data);
        }else{
            return $this->failNotFound('No Data Found with id '.$post_id);
        }
    }
}
