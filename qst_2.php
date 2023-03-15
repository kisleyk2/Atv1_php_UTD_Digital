<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Quest 2</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-4 offset-4 text-center">
                    <form action="#" method="POST">
                        <div class="row border border-dark p-4">
                            <div class="col border-3 border-dark">
                                <input type="text" name="v1" class="form-control v1" id="v1">
                            </div>
                            <div class="col border-3">
                                <input type="text" name="op" class="form-control op" maxlength="1">
                            </div>
                            <div class="col border-3">
                                <input type="text" name="v2" class="form-control v2">
                            </div>
                            <div class="col border-3">
                                <button class="btn btn-success form-control result">?</button>
                            </div>                            
                        </div>
                        <div class="row border border-dark">
                            <div class="col-12 bt=">
                                <button type="submit" class="btn btn-success btn-9" onclick="insert('=')">
                                    <span class="iconify" data-icon="material-symbols:equal"></span>
                                </button>
                            </div>
                        </div>                        
                    </form>
                    <div class="row border border-dark">
                        <div class="col"><button class="btn btn-success bt9" value="9" onclick="insert('9')">9</button></div>
                        <div class="col"><button class="btn btn-success bt8" value="8" onclick="insert('8')">8</button></div>
                        <div class="col"><button class="btn btn-success bt7" value="7" onclick="insert('7')">7</button></div>
                        <div class="col"><button class="btn btn-success bt/" value="/">/</button></div>
                    </div>
                    <div class="row border border-dark">
                        <div class="col"><button class="btn btn-success bt6" value="6" onclick="insert('6')">6</button></div>
                        <div class="col"><button class="btn btn-success bt5" value="5" onclick="insert('5')">5</button></div>
                        <div class="col"><button class="btn btn-success bt4" value="4" onclick="insert('4')">4</button></div>
                        <div class="col"><button class="btn btn-success bt*" value="*" onclick="insert('*')">*</button></div>
                    </div>
                    <div class="row border border-dark">
                        <div class="col"><button class="btn btn-success bt3" value="3" onclick="insert('3')">3</button></div>
                        <div class="col"><button class="btn btn-success bt2" value="2" onclick="insert('2')">2</button></div>
                        <div class="col"><button class="btn btn-success bt1" value="1" onclick="insert('1')">1</button></div>
                        <div class="col"><button class="btn btn-success bt-" value="-" onclick="insert('-')">-</button></div>
                    </div>
                    <div class="row  border border-dark">
                        <div class="col"><button class="btn btn-success bt0" value="0" onclick="insert('0')">0</button></div>
                        <div class="col">
                            <button class="btn btn-success btr">
                                <span class="iconify" data-icon="la:square-root-alt"></span>
                            </button>
                        </div>
                        <div class="col">
                            <button class="btn btn-success btex">
                                <span class="iconify" data-icon="mdi:exponent"></span>
                            </button>
                        </div> 
                        <div class="col"><button class="btn btn-success bt+" value="+" onclick="insert('+')">+</button></div>
                    </div>
                </div>
            </div>

        </div>
        <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
        <script>
            var v1 = document.querySelector('.v1');
            var v2 = document.querySelector('.v2');
            var op = document.querySelector('.op');
            var result = document.querySelector('.result');
            

            if (!v1.focus()) {
                function insert(dig) {
                    v1.value += dig;
                }
            } else if (!op.focus()) {
                function insert(dig) {
                    op.value = dig;
                }
            } else if (!v2.focus()) {
                function insert(dig) {
                    v2.value = dig;
                }
            }
        </script>

        <?php
            if (isset($_POST['v1'])){
                $v1 = (int) $_POST['v1'];
                $op = $_POST['op'];
                $v2 = (int) $_POST['v2'];
                
                if ($op == '+') {
                    $result = $v1 + $v2;
                } 
                if ($op == '-') {
                    $result = $v1 - $v2;
                }
                if ($op == '/') {
                    $result = $v1 / $v2;
                }
                if ($op == '*') {
                    $result = $v1 * $v2;
                }
                
        ?>
                <script>                
                    document.querySelector('.result').innerText = <?=number_format($result, 2, '.', '');?>
                </script>
        <?php
            }
        ?>
    </body>
</html>