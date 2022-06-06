<h1>Editar Cadastro</h1>
<hr>
<form action="" method="post">
    <input class="form-control mt-2" value="<?php echo $dados[0]; ?>" name="nome" type="text" placeholder="Nome">

    <input class="form-control mt-2" value="<?php echo $dados[1]; ?>" name="email" type="email" placeholder="E-mail">

    <input class="form-control mt-2" value="<?php echo $dados[2]; ?>" name="telefone" type="text" placeholder="Telefone">

    <button class="btn btn-primary mt-3">Enviar</button>
</form>