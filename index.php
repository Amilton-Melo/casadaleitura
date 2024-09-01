<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário - Casa da Leitura</title>
    <link rel="icon" href="/img/Logo.png">
    <link rel="stylesheet" href="/css/formulario.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://kit.fontawesome.com/85fb0f327c.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-masker/1.1.0/vanilla-masker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
</head>


<body>
    <section>
        <div class="container">
            <div class="header">
                <div class="topo">
                    <img src="/img/Logo.png" alt="Logo">
                    <h1>Casa da Leitura
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <section class="wrapper-form">
        <div class="container-form">
            <form method="POST" action="/formulario/email.php">
                <h1>Preencha o formulário abaixo</h1>
                <span>Preencha com suas informações corretamente, entraremos em contato para mais informações</span>
                <div class="form-group">
                    <label><span>*</span>Nome:</label>
                    <input type="text" name="nome" id="nome" placeholder="Nome completo" required>
                </div>
                <div class="form-group">
                    <label><span>*</span>Telefone:</label>
                    <input type="text" name="telefone" id="telefone" placeholder="(xx) x xxxx-xxxx" required>
                </div>
                <div class="form-group">
                    <label><span>*</span>E-mail:</label>
                    <input type="email" name="email" id="email" placeholder="exemplo@hotmail.com" required>
                </div>

                <div class="form-group">
                    <label><span>*</span>Qual sua expectativa para o curso?</label>
                    <textarea name="curso" id="curso" placeholder="Descrição" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="enviar">Enviar</button>
                </div>
            </form>
        </div>
    </section>

    <center>
        <!-- eu amo o amilton. ele ta me ensinando esse site c: -->
        <footer>
            Casa da Leitura
            <br>Copyright © 2020 - 2024. Todos Direitos Reservados
        </footer>
    </center>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            VMasker(document.querySelector("#telefone")).maskPattern("(99) 99999-9999");
        });
    </script>

</body>

</html>