<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Quest 5</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4 bg-dark text-white fs-4 text-center p-2">
                    Números Sorteados
                    <div class="row p-4">
                        <div class="col">
                            <?php
                            $numbers = array();
                            $cont = 0;

                            while (count($numbers) != 6) {
                                $sort = rand(1,60);
                                for ($i = 0; $i < count($numbers); $i++) {
                                    if ($sort == $numbers[$i]) {
                                        $cont++;
                                        break;
                                    }
                                }
                                if ($cont == 0) 
                                    array_push($numbers,$sort);

                                $cont = 0; 
                            }

                            sort($numbers);
                            foreach ($numbers as $number) {
                            ?>
                                <button class="btn btn-success"> <?php echo $number." "; ?></button>
                            <?php
                            }
                            ?>
                            <a href="JavaScript:location.reload(true);">
                                <button class="btn btn-warning m-4">Gerar</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
