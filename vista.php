
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="#" type="image/x-icon">
  <title>Práctica colores y su traducción</title>
</head>
<body>


<table border="1">
    <thead>
        <tr>
            <th>Color</th>
            <th>Traducción</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>
                <form>
                    <select name="colores" id="colores">
                        <option value="">ninguno</option>
                        <?php while($fila = $resultados->fetch_assoc()):?>
                            <option class="opciones" data-id="<?=$fila['id'];?>" value="<?= $fila['color'];?>">
                                <?= $fila['color'];?>
                            </option>
                        <?php endwhile;?>
                       
                    </select>
                </form>
            </td>
            <td class="dataCell">
               
            </td>
        </tr>
    </tbody>
</table>
  
<script src="/js/main.js"></script>
</body>
</html>