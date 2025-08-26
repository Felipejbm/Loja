<?php
include 'pedaco.php'
?>
<div class="container">
    <br>
    <h1>Formalário para atualizar dados de produto</h1>
    <form action="atualizar.php" method="POST">
        <?php
        $id = $_GET['id'];
        echo"Valor é de: $id" ;
        ?>
        <div class="mb-3">
            Nome: <input type="text" class="form-control" name="nome">
        </div>

        <div class="mb-3">
            Preco: <input type="text" class="form-control" name="preco">
        </div>

        <div class="mb-3">
            Quantidade: <input type="text" class="form-control" name="quantidade">
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="index.php" type="a" class="btn btn-secondary">Voltar ao menu</a>
</div>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>