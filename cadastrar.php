
<?php 
        function __autoload($class_name){
                require_once 'classes/'.$class_name.'.php';
        }
?>
<html>

        <head>

                
                <meta charset="UTF-8"/>
        </head>
        <body>
                <?php
                        $usuario = new Usuarios();

                        if(isset($_POST['confirmar'])){
                                $nome = $_POST['nome'];
                                $email = $_POST['email'];
                                $telefone = $_POST['telefone'];
                                $endereco = $_POST['endereco'];

                                $usuario->setName($nome);
                                $usuario->setEmail($email);
                                $usuario->setEndereco($endereco);
                                $usuario->setTelefone($telefone); 

                                if($usuario->insert()){
                                        echo "Inserido com Sucesso!!";
                                }
                        }
                ?>
                <div class="form_cad">
                        <form method="POST"  name="cadastro" action ="#">
                                <ol>
                                        <p class="espaco"></p>
                                        <li>Nome:<br><input name="nome" value="" required type="text"/></li>
                                        <p class="espaco"></p>

                                        <li>Telefone:<br>
                                        <input name="telefone" value="" required type="text"/></li>
                                        <p class="espaco"></p>

                                        <li>Endereço:<br>
                                        <input name="endereco" value="" required type="text"/>
                                        </li>
                                        <p class="espaco"></p>

                                        <li>Email:<br>
                                        <input name="email" value="" required type="email"/>
                                        </li>
                                        <p class="espaco"></p>

                                        <li>Senha:<br>
                                        <input name="senha" value="" required type="password" placeholder="Digite uma senha min 5 caracteres"/>
                                        <br><br>A senha deve ter no minimo 5 caracteres:
                                        </li>
                                        <p class="espaco"></p>

                                        <li>Repita a Senha:<br>
                                        <input name="rsenha" value="" required type="password"/>
                                        </li>
                                        <p class="espaco"></p>

                                        <li>CPF:<br>
                                        <input name="cpf" value="" required type="text"/>
                                        </li>
                                        <p class="espaco"></p>

                                        <input type="submit" value ="confirmar" name="confirmar"/>
                                </ol>
                        </form>
                </div>
        </body>
</html>
