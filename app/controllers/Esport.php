<?php

namespace App\Controllers;

use App\Core\Controller;

class Esport extends Controller
{
     public object $model;

     public function __construct()
     {
          parent::cekLogin();

          $this->model = new \App\Models\Esport();
     }

     public function index()
     {
          $data['rows'] = $this->model->show();
          $this->dashboard('esport/index', $data);
     }

     public function input()
     {
          $this->dashboard('esport/input');
     }

     public function save()
     {
          $this->model->save();
          header('location:' . URL . '/esport');
     }

     public function edit($id)
     {
          // Menampilkan data edit
          $data['row'] = $this->model->edit($id);

          $this->dashboard('esport/edit', $data);
     }

     public function update()
     {
          $this->model->update();
          header('location:' . URL . '/esport');
     }

     public function delete($id)
     {
          $this->model->delete($id);
          header('location:' . URL . '/esport');
     }
}
