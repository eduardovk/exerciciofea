<h2><?php echo $title; ?></h2>

<?php foreach ($contatos as $contatos_item): ?>

        <h3><?php echo $contatos_item['nome']; ?></h3>
        <div class="main">
                <b>Telefone:</b> <?php echo $contatos_item['telefone']; ?>
                <br><b>E-mail:</b> <?php echo $contatos_item['email']; ?>
        </div>
        <p><a href="<?php echo site_url('contatos/'.$contatos_item['id']); ?>">Ver Contato</a></p>

<?php endforeach; ?>
