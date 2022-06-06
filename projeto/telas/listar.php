<h1>Listar Contatos</h1>
<hr>

<table class="table table-hover table-striped">
    <thead class="table-dark">
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($contatos as $posicao => $cadaContato) {
                $partes = explode(';', $cadaContato);

                echo '<tr>';
                    echo '<td>' . $partes[0] . '</td>';
                    echo '<td>' . $partes[1] . '</td>';
                    echo '<td>' . $partes[2] . '</td>';
                    echo "<td>
                        <a class='btn btn-danger btn-sm' href='/excluir?id={$posicao}'>Excluir</a>
                        <a class='btn btn-warning btn-sm' href='/editar?id={$posicao}'>Editar</a>
                    </td>";
                echo '</tr>';
            }
        ?>
    </tbody>
</table>