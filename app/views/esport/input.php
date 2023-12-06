<h2>Input Esport</h2>

<form action="<?php echo URL; ?>/esport/save" method="post">
    <table>
        <tr>
            <td>NAME</td>
            <td><input type="text" name="name_es" required></td>
        </tr>
        <tr>
            <td>GENRE</td>
            <td><input type="text" name="genre_es" required></td>
        </tr>
        <tr>
            <td>CATEGORIES</td>
            <td><input type="text" name="categories_es" required></td>
        </tr>
        <tr>
            <td>COUNTRY</td>
            <td><input type="text" name="country_es" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>