<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="apple-4.png" type="image/x-icon">
    <link rel="stylesheet" href="contatocss.css">
    <title>gbinformatica.com</title>
</head>
<body>
<?php
    include('menu.php');
   ?>
    <main>
        <section>
            <h2>Contato</h2>
            <form action="https://api.staticforms.xyz/submit" method="post">
                <label>Nome</label>
                <input type="text" name="name" placeholder="Digite seu nome" autocomplete="off" required>
                <label>Email</label>
                <input type="email" name="email" placeholder="Digite seu email" autocomplete="off" required>
                <label>Mensagem</label>
                <textarea name="message" cols="30" rows="10" placeholder="Digite sua mensagem" requireds></textarea>
                <button type="submit">
                <a href="obrigadohtml.html" class="link-1">
                Enviar
                </a>
                </button>
    
                <input type="hidden" name="accessKey" value="">
                <input type="hidden" name="redirectTo" value="">
            </form> 
        </section>
    </main>
</body>
</html>