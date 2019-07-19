<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
        <style>
            #caixaCadastro, #caixaRecuperarSenha, #alerta{
                display:none;
                }
            
        
        </style>
        <title>Sistema de Login David's Systems</title>

    </head>

    <body class="bg-dark">
        <main class="container mt-4">
            <section class="row">
                <div class="col-lg-4 offset-lg-4" id="alerta">
                    <div class="alert alert-success text-center">
                        <strong id="resultado">
                            Maravilhoso mundo sem o <i>Sublime!!</i> 
                        </strong>
                    </div>
                </div>
            </section>

            <section class="row mb-5">
                <div class="col-lg-4 offset-lg-4 bg-light rounded" id="caixaLogin">
                    <h2 class="text-center mt-2"> Entrada no Sistema</h2>    
                    <form action="#" id="formLogin" class="p-2">

                        <div class="form-group">
                            <input type="text" name="nomeUsuário" id="nomeUsuário" class="form-control" placeholder="Nome do Usuário" required>
                        </div>

                        <div class="form-group">
                            <input type="password" name="senhaUsuário" id="senhaUsuário" class="form-control" placeholder="Senha" required>
                        </div>
                        
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="lembrar" id="lembrar" class="custom-control-input">
                                <label for="lembrar" class="custom-control-label">
                                    Lembrar de Mim
                                </label>
                                <a href="#" id="btnEsqueci" class="float-right">
                                    Esqueci a Senha
                                </a>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" value=":: Entrar ::" name="btnEntrar" id="btnEntrar" class="btn btn-primary btn-block">
                        </div>

                        <div class="form-group">
                           <p class="center">Novo Usuário?
                           <a href="#" id="btnCadastrar">Cadastre-se Aqui!</a>
                           </p>
                        </div>
                        
                    </form>            
                </div>
            </section>
    
            <!--  Formulário de Cadastro -->
            <section class="row mb-5">
                <div class="col-lg-4 offset-lg-4 bg-light rounded" id="caixaCadastro">
                    <h2 class="text-center">Cadastro de Usuário</h2>
                    <form action="#" class="p-2" id="frmCadastro">
                    
                        <div class="form-group">
                            <input type="text" name="nomeCompleto" id="nomeCompleto" class="form-control" placeholder="Nome Completo" required>
                        </div>
                    
                        <div class="form-group">
                            <input type="text" name="nomeUsuário" id="nomeUsuário" class="form-control" placeholder="Nome de Usuário" required>
                        </div>
                    
                        <div class="form-group">
                            <input  type="email" name="emailUsuário" id="emailUsuário" class="form-control" placeholder="E-mail de Usuário" required>
                        </div>
                    
                        <div class="form-group">
                            <input type="password" name="senhaUsuário" id="senhaUsuário" class="form-control" placeholder="Digite sua senha" required>
                        </div>
                    
                        <div class="form-group">
                        <input type="password" name="senhaConfirma" id="senhaConfirma" class="form-control" placeholder="Confirme sua senha" required>
                        </div>
                    
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="concordar" id="concordar" class="custom-control-input">
                                <label for="concordar" class="custom-control-label">
                                    Eu concordo com os <a href="#">termos e condições.</a>
                                </label>
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <input type="submit" value=":: Cadastrar ::" class="btn btn-primary btn-block" id="btnRegistrar">
                        </div>
                            
                        <div class="form-group">
                            <p class="text-center">
                                Já cadastrado? <a href="#" id="btnJaCadastrado">Entrar aqui.</a>
                            </p>
                        </div>
                    </form>

                </div>  

            </section>
            
            <!-- Formulário de Recuperação de Senha -->
            <section class="row mb-5">
                <div class="col-lg-4 offset-lg-4 bg-light rounded" id="caixaRecuperarSenha">
                    <h2 class="text-center">Gerar nova senha</h2>
                    <form action="#" id="formSenha">
                        <div class="form-group">
                            <small class="text-muted">
                                Para gerar uma nova senha, digite seu e-mail e receba as instruções.                                
                            </small>
                        </div>

                        <div class="form-group">
                            <input type="email" name="emailSenha" id="emailSenha" class="form-control" placeholder="E-mail" required>
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" value=":: Instruções ::" id="btnEnviarEmail" class="btn btn-primary btn-block">
                        </div>
                        
                        <div class="form-group float-right">
                            <a href="#" id="btnVoltar">Voltar</a>
                        </div>
                    </form>
                </div>
            </section>
        </main>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script>
            /* jQuery */
            $(function(){
                /*  Trocar de tela de login para recuperar senha */
                $("#btnEsqueci").click(function(){
                    $("#caixaLogin").hide();
                    $("#caixaRecuperarSenha").show();
                });
                 /* Voltar para a tela de login */
                 $("#btnVoltar").click(function(){
                    $("#caixaRecuperarSenha").hide();
                    $("#caixaLogin").show();
               
                });
                
                $("#btnCadastrar").click(function(){
                    $("#caixaLogin").hide();
                    $("#caixaCadastro").show();           
                });
                $("#btnJaCadastrado").click(function(){
                    $("#caixaLogin").show();
                    $("#caixaCadastro").hide();   
                })
            });
        </script>
    </body>

</html>