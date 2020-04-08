
    <body>
        <form action="<?php echo site_url('login/entrar'); ?>" method="post">
            <label for="usuario">Usuário</label>
            <input type="text" name="usuario" placeholder="Usuário" required><br>
            <label for="senha">Senha</label>
            <input type="password" name="senha" placeholder="Senha" required><br>
            <button type="submit">Entrar</button>
        </form>
        <br>
        <a href="<?php echo site_url('login/create') ?>">Criar conta</a><br><br><hr>
    </body>
