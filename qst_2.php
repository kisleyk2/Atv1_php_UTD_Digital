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
                            <div class="col">   
                                <input type="text" name="opc" class="form-control v1" id="v2">
                            </div>
                            <div class="col border-3">
                                <input type="text" name="v2" class="form-control v2" id="v3">
                            </div>
                            <div class="col border-3">
                                <button class="btn btn-dark form-control result">?</button>
                            </div>                            
                        </div>
                        <div class="row border border-dark">                            
                            <div class="col-12 bt= p-2">
                                <button type="submit" class="btn btn-success btn-9 form-control">
                                    <span class="iconify" data-icon="material-symbols:equal"></span>
                                </button>
                            </div>                                                 
                        </div>                        
                    </form>
                    <div class="row border border-dark p-2">
                        <div class="col-6 btc">
                            <button class="btn btn-dark btn-9 form-control" id="reset">
                                <span class="iconify" data-icon="material-symbols:arrow-back-rounded"></span> 
                            </button>
                        </div>     
                        <div class="col-6 bt=">
                            <button id="bt" type="button" value="1" onclick="getfocus(value)" class="btn btn-dark btn-9 form-control">
                                <span class="iconify" data-icon="icon-park-solid:reverse-operation-out"></span>
                            </button>
                        </div>
                    </div>
                    <div class="row border border-dark p-2">
                        <div class="col"><button class="btn btn-success bt9" value="9" onclick="insert('9')">9</button></div>
                        <div class="col"><button class="btn btn-success bt8" value="8" onclick="insert('8')">8</button></div>
                        <div class="col"><button class="btn btn-success bt7" value="7" onclick="insert('7')">7</button></div>
                        <div class="col"><button class="btn btn-success bt/" value="/" onclick="insert('/')">/</button></div>
                    </div>
                    <div class="row border border-dark p-2">
                        <div class="col"><button class="btn btn-success bt6" value="6" onclick="insert('6')">6</button></div>
                        <div class="col"><button class="btn btn-success bt5" value="5" onclick="insert('5')">5</button></div>
                        <div class="col"><button class="btn btn-success bt4" value="4" onclick="insert('4')">4</button></div>
                        <div class="col"><button class="btn btn-success bt*" value="*" onclick="insert('*')">*</button></div>
                    </div>
                    <div class="row border border-dark p-2">
                        <div class="col"><button class="btn btn-success bt3" value="3" onclick="insert('3')">3</button></div>
                        <div class="col"><button class="btn btn-success bt2" value="2" onclick="insert('2')">2</button></div>
                        <div class="col"><button class="btn btn-success bt1" value="1" onclick="insert('1')">1</button></div>
                        <div class="col"><button class="btn btn-success bt-" value="-" onclick="insert('-')">-</button></div>
                    </div>
                    <div class="row  border border-dark p-2">
                        <div class="col"><button class="btn btn-success bt0" value="0" onclick="insert('0')">0</button></div>
                        <div class="col">
                            <button class="btn btn-success btr" value="r" onclick="insert('sqrt')">
                                <span class="iconify" data-icon="la:square-root-alt"></span>
                            </button>
                        </div>
                        <div class="col">
                            <button class="btn btn-success btex" value="e" onclick="insert('^')">
                                <span class="iconify" data-icon="mdi:exponent"></span>
                            </button>
                        </div> 
                        <div class="col"><button class="btn btn-success bt+" value="+" onclick="insert('+')">+</button></div>
                    </div>
                </div>
            </div>
        </div>        

        <script>
            var v1 = document.querySelector("#v1");
            var v2 = document.querySelector("#v2");
            var v3 = document.querySelector("#v3");

            var cod = '1';
            function getfocus(c) {
                if (c == '1') 
                    v1.focus();                    
                else if (c == '2')
                    v2.focus();
                else
                    v3.focus();
                
                if (c < 3)
                    c = Number(c) + 1;
                else
                    c = '1';

                document.getElementById('bt').value = String(c);
                cod = c;                
            }

            function insert(dig) {
                if (cod == '1')
                    v1.value += dig;
                else if (cod == '2')
                    v2.value += dig;
                else {
                    v3.value += dig;
                }

                if (v2.value == 'sqrt')
                    v3.value = '0';
                
            }
            
            var inputText;
            var reset = window.document.querySelector("#reset");
            
            reset.addEventListener("click", function() {
                let op;

                if (cod == '1') 
                    op = '1';
                else if (cod == '2')
                    op = '2';
                else
                    op = '3';

                inputText = window.document.querySelector(`#v${op}`);
                if(inputText.value.length){
                    inputText.value = inputText.value.substr(0, inputText.value.length -1);
                    inputText.focus();
                }
                                   
            });           
        </script>

        <?php
            if (isset($_POST['v1'])){
                $v1 = (int) $_POST['v1'];
                $opc = $_POST['opc'];
                $v2 = (int) $_POST['v2'];

                if ($opc == '+') {
                    $result = $v1 + $v2;
                } 
                if ($opc == '-') {
                    $result = $v1 - $v2;
                }
                if ($opc == '/') {
                    $result = $v1 / $v2;
                }
                if ($opc == '*') {
                    $result = $v1 * $v2;
                }
                if ($opc == 'sqrt') {
                    $result = sqrt($v1);
                }
                if ($opc == '^') {
                    $result = pow($v1,$v2);
                }
                
        ?>
                <script>                
                    document.querySelector('.result').innerText = <?php echo number_format($result, 2, '.', ''); ?>
                </script>
        <?php
            }
        ?>

        <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    </body>
</html> 
