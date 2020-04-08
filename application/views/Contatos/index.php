<h2><?php echo $title; ?></h2>

<?php foreach ($contatos as $contatos_item): ?>

        <h3><?php echo $contatos_item['nome']; ?></h3>
        <div class="main">
                <b>Telefone:</b> <?php echo $contatos_item['telefone']; ?>
                <br><b>E-mail:</b> <?php echo $contatos_item['email']; ?>
        </div>
        <p><a href="<?php echo site_url('contatos/'.$contatos_item['id']); ?>">Ver Contato</a></p>
        <p><a href="<?php echo site_url('contatos/edit/'.$contatos_item['id']); ?>">Editar Contato</a></p>
        <p><a href="#" class="delete_data" id="<?php echo $contatos_item['id']; ?>">Excluir Contato</a></p>

<?php endforeach; ?>

<script>
$(document).ready(function(){
    $('.delete_data').click(function(){
        var id = $(this).attr("id");
        if(confirm("Tem certeza que deseja excluir este contato?")){
            window.location="<?php echo site_url('contatos/delete/'); ?>"+id;
        }else{

        }
    });
});
</script>
