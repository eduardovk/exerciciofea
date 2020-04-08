<h2><?php echo 'Editar contato:'.$title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('contatos/edit/'.$contatos_item['id']); ?>

    <input type="hidden" name="id" value="<?php echo $contatos_item['id'] ?>"/>

    <label for="nome">Nome</label>
    <input type="text" name="nome" value="<?php echo $contatos_item['nome']?>"/><br />

    <label for="telefone">Telefone</label>
    <input type="text" name="telefone" value="<?php echo $contatos_item['telefone']?>" /><br />

    <label for="email">E-mail</label>
    <input type="text" name="email" value="<?php echo $contatos_item['email']?>" /><br />

    <input type="submit" name="submit" value="Atualizar contato" />

</form>
