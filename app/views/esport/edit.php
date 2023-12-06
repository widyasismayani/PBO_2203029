<h2>Edit Esport</h2>

<form action="<?php echo URL; ?>/esport/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['id_es']; ?>">
    <table>
        <tr>
            <td>NAME</td>
            <td><input type="text" name="name_es" value="<?php echo $data['row']['name_es']; ?>" required></td>
        </tr>
        <tr>
            <td>GENRE</td>
            <td><input type="text" name="genre_es" value="<?php echo $data['row']['genre_es']; ?>" required></td>
        </tr>
        <tr>
            <td>CATEGORIES</td>
            <td><input type="text" name="categories_es" value="<?php echo $data['row']['categories_es']; ?>" required></td>
        </tr>
        <tr>
            <td>COUNTRY</td>
            <td><input type="text" name="country_es" value="<?php echo $data['row']['country_es']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>