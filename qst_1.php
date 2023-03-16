<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Quest 1</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    </head>
    <body>
        <form>
            <table class="col-form text-center">
                <?php
                $cont = 0;
                $numbers = array();
                for ($i = 0; $i < 11; $i++) {
                    $n = rand(1,100);
                ?>
                <tr>
                    <th class="border border-dark">Number <?php echo $i+1; ?></th>
                    <td><input type="text" name="num" value="<?php echo $n?>" class="form-control text-center"></td>
                <tr>
                <?php
                    $numbers[$cont] = $n;
                    $cont++;                
                }
                ?>
                <tr>
                <?php sort($numbers); ?>
                    <th class="border border-dark"><?php echo "Números em Ordem Crescente: "; ?></th>
                    <td class="border border-dark bg-success">
                        <?php
                        foreach ($numbers as $number) {
                        ?>    
                           <button class="btn btn-warning"> <?php echo $number." ";?> </button> 
                        <?php
                        }   
                        ?>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
