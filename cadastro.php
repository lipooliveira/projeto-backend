<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/login.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="container">
        <h2>Cadastro</h2>
        <form action="processa_cadastro.php" method="post">
            <h3>Informações pessoais</h3>
            <input type="text" name="nome" placeholder="Nome completo" required>
            <input type="text" name="cpf" placeholder="CPF" required>
            <input type="text" name="noma_mae" placeholder="Nome da mãe" required>
            <input
                name="data_nascimento"
                placeholder="Data de nascimento"
                type="text"
                onfocus="(this.type='date')"
                onblur="(this.type='text')"
                id="date"
                required
            />

            <h3>Informações de contato</h3>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="telefone" placeholder="Telefone" required>
            <input type="text" name="celular" placeholder="Celular" required>

            <h3>Endereço</h3>
            <input type="text" name="estado" placeholder="Estado" required>
            <input type="text" name="cidade" placeholder="Cidade" required>
            <input type="text" name="cep" placeholder="CEP" required>
            <input type="text" name="logradouro" placeholder="Logradouro" required>
            <input type="text" name="bairro" placeholder="Bairro" required>
            <input type="text" name="complemento" placeholder="Complemento">
            <input type="text" name="numero" placeholder="Numero">

            <h3>Informações de acesso</h3>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <input type="password" name="confirmarsenha" placeholder="Confirme sua senha" required>
            <input type="submit" value="Cadastrar">
        </form>
        <a href="login.php">Já tenho conta</a>
    </div>
</body>
</html>