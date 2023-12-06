<h2>ESPORT</h2>

<a href="<?php echo URL; ?>/esport/input" class="btn">Input Esport</a>

<table id="dtb">
      <thead>
            <tr>
                  <th>NO</th>
                  <th>NAME</th>
                  <th>GENRE</th>
                  <th>CATEGORIES</th>
                  <th>COUNTRY</th>
                  <th>EDIT</th>
                  <th>DELETE</th>
            </tr>
      </thead>
      <tbody>
            <?php $no = 1;
            foreach ($data['rows'] as $row) { ?>
                  <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['name_es']; ?></td>
                        <td><?php echo $row['genre_es']; ?></td>
                        <td><?php echo $row['categories_es']; ?></td>
                        <td><?php echo $row['country_es']; ?></td>
                        <td><a href="<?php echo URL; ?>/esport/edit/<?php echo $row['id_es']; ?>" class="btn">Edit</a></td>
                        <td><a href="<?php echo URL; ?>/esport/delete/<?php echo $row['id_es']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
                  </tr>
            <?php $no++;
            } ?>
      </tbody>
</table>