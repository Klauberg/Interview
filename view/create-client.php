<?php require_once "layout/header.php"; ?>

<div class="container">
    <h1>Cadastrar novo cliente</h1>

    <form action="add-client.php" method="POST">
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="birth">Data de nascimento:</label>
            <input type="date" class="form-control" id="birth" name="birth" required>
        </div>

        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" class="form-control" id="cpf" name="cpf" maxlength="11" required>
        </div>

        <div class="form-group">
            <label for="rg">RG:</label>
            <input type="text" class="form-control" id="rg" name="rg" required>
        </div>

        <div class="form-group">
            <label for="phone">Telefone:</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <a href="index.php" class="btn btn-secondary">Voltar</a>
    </form>
</div>

<?php require_once "layout/footer.php"; ?>
