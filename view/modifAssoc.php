<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Modifier association</title>

</head>
<body>
    <h1>Modifier une assiciation</h1>
    <label>Liste des associations : </label>
    <select>
        <option value="" selected>-----Choisissez une association-----</option>
        <!-- <option value="ex1">Exemple 1</option>
        <option value="ex2">Exemple 2</option> -->
        
        <?php
            include '..\model\fonctions.php';
            $test = getValuesFromBDD('mrbs_area');
            foreach($test as $t)
            {

                echo "<option value='".$t->id."'>".$t->area_name."</option>";
            }
            ?>
    </select>
    

    
    
</body>
</html>