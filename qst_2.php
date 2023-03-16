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
                                <select name="op" class="btn border border-3" id="op">
                                    <option></option>
                                    <option value="+">+</option>
                                    <option value="-">-</option>
                                    <option value="/">/</option>
                                    <option value="*">x</option>
                                    <option value="r">&radic;</option>
                                    <option value="e">x^y</option>
                                </select>
                            </div>
                            <div class="col border-3">
                                <input type="text" name="v2" class="form-control v2" id="v2">
                            </div>
                            <div class="col border-3">
                                <button class="btn btn-dark form-control result">?</button>
                            </div>                            
                        </div>
                        <div class="row border border-dark">                            
                            <div class="col-12 bt= p-2">
                                <button type="submit" class="btn btn-success btn-9 form-control" onclick="insert('=')">
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
                            <button id="bt" type="button" value="true" onclick="getfocus(value)" class="btn btn-dark btn-9 form-control">
                                <span class="iconify" data-icon="icon-park-solid:reverse-operation-out"></span>
                            </button>
                        </div>
                    </div>
                    <div class="row border border-dark p-2">
                        <div class="col"><button class="btn btn-success bt9" value="9" onclick="insert('9')">9</button></div>
                        <div class="col"><button class="btn btn-success bt8" value="8" onclick="insert('8')">8</button></div>
                        <div class="col"><button class="btn btn-success bt7" value="7" onclick="insert('7')">7</button></div>
                        <div class="col"><button class="btn btn-success bt/" value="/">/</button></div>
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

        <script>
            var cod = true;
            function getfocus(c) {
                c = Boolean(c);
                if (c == true) 
                    document.getElementById('v1').focus();                    
                else 
                    document.getElementById('v2').focus();
                
                c = !c;        
                document.getElementById('bt').value = String(c);
                cod = !cod;                
            }

            function insert(dig) {
                if (cod == true)
                    document.getElementById('v1').value += dig;
                else 
                    document.getElementById('v2').value += dig;
            }
            
            var inputText;
            var reset = window.document.querySelector("#reset");
            
            reset.addEventListener("click", function() {
                if (cod == true) {
                    inputText = window.document.querySelector("#v1");
                    if(inputText.value.length){
                        inputText.value = inputText.value.substr(0, inputText.value.length -1);
                        inputText.focus();
                    }
                } else {
                    inputText = window.document.querySelector("#v2");
                    if(inputText.value.length){
                        inputText.value = inputText.value.substr(0, inputText.value.length -1);
                        inputText.focus();
                    }
                }                
            });           
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
                if ($op == 'r') {
                    $result = sqrt($v1);
                }
                if ($op == 'e') {
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
