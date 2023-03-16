<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Quest 3</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">                
                <div class="col-md-6 offset-md-3 text-center bg-dark text-white fs-5 p-2">
                    <p class="fs-3">Sistema Gerador de Boleto</p>
                    <form action="" method="POST">
                        <div class="row p-2">
                            <div class="col-md-4 bg-success">
                                Valor
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="number" name="valor">
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-md-4 bg-success">
                                Nº de Parcelas
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="parcelas">
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-md-4 bg-success">
                                Data Pagamento 
                            </div>
                            <div class="col-md-8">
                                <select name="mes" class="form-control">
                                    <option></option>    
                                    <option value="1">Janeiro</option>
                                    <option value="2">Fevereiro</option>
                                    <option value="3">Março</option>
                                    <option value="4">Abril</option>
                                    <option value="5">Maio</option>
                                    <option value="6">Junho</option>
                                    <option value="7">Julho</option>
                                    <option value="8">Agosto</option>
                                    <option value="9">Setembro</option>
                                    <option value="10">Outubro</option>
                                    <option value="11">Novembro</option>
                                    <option value="12">Dezembro</option>
                                </select> 
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-success form-control">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>            
        </div>
        <?php 
		
            # Testando se existe algum post preenchido
            if(isset($_POST['valor'])){

                $valor = $_POST['valor'];
                $parcelas = $_POST['parcelas'];
                $mes = (int) $_POST['mes'];
                $ano = 2023;
                $valorMensal = ($valor / $parcelas);
        ?>
                <div class="container-fluid col-md-6 offset-md-3 mt-5">
                    <table class="table table-hover table-bordered table-striped">
                        <tr class="text-center bg-dark fs-4">
                            <td class="text-white" colspan=3> <?php echo "Valor: R$ ".number_format($valor, 2, '.', ''); ?> </td>
                        </tr>
                        <tr class="text-center bg-success text-white fs-5">
                            <td>Vencimento</td>
                            <td>Parcela</td>
                            <td>Valor</td>
                        </tr>
                        <?php for($i = 0; $i < $parcelas; $i++): ?>
                        <tr class="text-center">
                            <td>
                                <?php
                                echo mes($mes)." de $ano";
                                $mes += 1;
                                if ($mes == 13) {
                                    $mes = 1;
                                    $ano++;
                                } 
                                ?>
                            </td>
                            <td><?php echo $i+1; ?></td>
                            <td><?php echo "R$ ".number_format($valorMensal, 2, '.', ''); ?></td>
                        </tr>
                        <?php endfor; ?>
                    </table>
                </div>
        <?php
            }
            function mes($m) {
                switch ($m) {
                    case 1:
                        $m = 'Janeiro';
                        break;
                    case 2:
                        $m = 'Fevereiro';
                        break;
                    case 3:
                        $m = 'Março';
                        break;
                    case 4:
                        $m = 'Abril';
                        break;
                    case 5:
                        $m = 'Maio';
                        break;
                    case 6:
                        $m = 'Junho';
                        break;
                    case 7:
                        $m = 'Julho';
                        break;
                    case 8:
                        $m = 'Agosto';
                        break;
                    case 9:
                        $m = 'Setembro';
                        break;
                    case 10:
                        $m = 'Outubro';
                        break;
                    case 11:
                        $m = 'Novembro';
                        break;
                    case 12:
                        $m = 'Dezembro';
                        break;
                }
                return $m;                
            }
        ?>
    </body>
</html>
