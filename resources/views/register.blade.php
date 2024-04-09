<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <title>Contas</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="authentication-bg">
        
        <div class="account-pages my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5">
                        @if(session('status'))
                            <div class="alert alert-{{session('status')}} alert-dismissible fade show" role="alert">
                                {{ session('mensagem') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="row">
                                    <div class="col-lg-12 p-5">
                                        <div class="mx-auto mb-5">
                                            <h1>CONTAS</h1>
                                        </div>

                                        <h6 class="h5 mb-0 mt-4">Crie sua conta</h6>
                                        <p class="text-muted mt-0 mb-4">Analise todos os seus gastos aqui!</p>

                                        <form action="{{url('register/create')}}" class="authentication-form" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label class="form-control-label">Nome</label>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-dual" data-feather="user"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="nome" placeholder="Seu nome completo" name="nome" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                            <label class="form-control-label">Data de nascimento</label>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-dual" data-feather="user"></i>
                                                        </span>
                                                    </div>
                                                    <input type="date" class="form-control" id="data_nascimento" placeholder="Entre com a sua data de nascimento" name="dtnascimento" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="form-control-label">Email</label>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-dual" data-feather="mail"></i>
                                                        </span>
                                                    </div>
                                                    <input type="email" class="form-control" id="email" placeholder="seuemail@gmail.com" name="email" required>
                                                </div>
                                            </div>

                                            <div class="form-group">Username</label>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-dual" data-feather="user"></i>
                                                        </span>
                                                    </div>
                                                    <input type="username" class="form-control" id="username" placeholder="Entre com o seu username" name="username" required>
                                                </div>
                                            </div>
                                            

                                            <div class="form-group ">
                                                <label class="form-control-label">Senha</label>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-dual" data-feather="lock"></i>
                                                        </span>
                                                    </div>
                                                    <input type="password" class="form-control" id="password"
                                                        placeholder="Enter com a sua senha" name="senha" required>
                                                </div>
                                            </div>
                                            <div class="form-group mb-0 text-center">
                                                <button class="btn btn-primary btn-block" type="submit">Inscrever-se</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">Já tem uma conta ? <a href="{{url('login')}}" class="text-primary font-weight-bold ml-1">Faça o login</a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>
</html>
