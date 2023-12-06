<?php

namespace App\Models;

use App\Core\Model;

class Esport extends Model
{

     public function show()
     {
          $query = "SELECT * FROM tb_esport";
          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

     public function save()
     {
          $name_es = $_POST['name_es'];
          $genre_es = $_POST['genre_es'];
          $categories_es = $_POST['categories_es'];
          $country_es = $_POST['country_es'];

          $sql = "INSERT INTO tb_esport
            SET name_es=:name_es, genre_es=:genre_es, categories_es=:categories_es, country_es=:country_es";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":name_es", $name_es);
          $stmt->bindParam(":genre_es", $genre_es);
          $stmt->bindParam(":categories_es", $categories_es);
          $stmt->bindParam(":country_es", $country_es);

          $stmt->execute();
     }

     public function edit($id)
     {
          $query = "SELECT * FROM tb_esport WHERE id_es=:id_es";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam("id_es", $id);
          $stmt->execute();

          return $this->select($stmt);
     }

     public function update()
     {
          $name_es = $_POST['name_es'];
          $genre_es = $_POST['genre_es'];
          $categories_es = $_POST['categories_es'];
          $country_es = $_POST['country_es'];
          $id = $_POST['id_es'];

          $sql = "UPDATE tb_esport
          SET name_es=:name_es, genre_es=:genre_es, categories_es=:categories_es, country_es=:country_es WHERE id_es=:id_es";

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":name_es", $name_es);
          $stmt->bindParam(":genre_es", $genre_es);
          $stmt->bindParam(":categories_es", $categories_es);
          $stmt->bindParam(":country_es", $country_es);
          $stmt->bindParam(":id_es", $id_es);

          $stmt->execute();
     }

     public function delete($id)
     {
          $sql = "DELETE FROM tb_esport WHERE id_es=:id_es";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":id_es",$id);
          $stmt->execute();
     }
}
