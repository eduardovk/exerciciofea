<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('contatos/create'); ?>

    <label for="nome">Nome</label>
    <input type="text" name="nome" /><br />

    <label for="telefone">Telefone</label>
    <input type="text" name="telefone" /><br />

    <label for="email">E-mail</label>
    <input type="text" name="email" /><br />

    <input type="submit" name="submit" value="Cadastrar contato" />

</form>
