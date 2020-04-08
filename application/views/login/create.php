
    <body>
        <?php echo validation_errors(); ?>

        <?php echo form_open('login/create'); ?>
            <label for="nome">Nome</label>
            <input type="text" name="nome" placeholder="Nome" required><br>
            <label for="usuario">Usuário</label>
            <input type="text" name="usuario" placeholder="Usuário" required><br>
            <label for="senha">Senha</label>
            <input type="password" name="senha" placeholder="Senha" required><br>
            <button type="submit">Registrar</button>
        </form>
    </body>
