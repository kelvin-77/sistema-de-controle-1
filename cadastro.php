<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SISTEMA</title>
        
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        
        <!-- CSS -->
        <link rel="stylesheet" href="assets/css/cadastro.css">

    </head>
    <body>
        <section id="titulo">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1>CADASTRAR PRODUTO</h1>
                    </div>
                </div>
            </div>
        </section>
        <section id="cadastro">
            <div class="container">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-4">
                        <form id="cadastro" name="Cadastro" method="post" action="">
                            <input name="Produto" placeholder="Nome do Produto" type="text">
                            <input name="Código" placeholder="Código" type="text">
                            <input name="Quantidade" placeholder="Quantidade" type="text">
                            <input name="Produto" placeholder="Data de Cadastro" type="text">

                            <button type="submit">Cadastrar Produto</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="voltar">
            <div class="container">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-4">
                        <a href="/index.php"><button >Voltar</button></a>
                    </div>
                </div>
            </div>
        </section>

        
    </body>

</html>