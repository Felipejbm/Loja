<?php
include 'pedaco.php';
$id = $_GET['id'];
?>
<div class="container">
    <br>
    <h1>Formalário para atualizar dados de produto</h1>

    <form action="atualizar.php? id= <?php echo $id; ?>" method="POST">
        <?php
        require 'conexao.php';
        $sql = "SELECT * FROM produtos WHERE id = $id";
        $stmt = $pdo->query($sql);
        $produto = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>

        <div class="mb-3">
            Nome: <input type="text" class="form-control" name="nomeNovo" value="<?php echo $produto['nome'] ?>">
        </div>

        <div class="mb-3">
            Preco: <input type="text" class="form-control" name="precoNovo" value="<?php echo $produto['preco'] ?>">
        </div>

        <div class="mb-3">
            Quantidade: <input type="text" class="form-control" name="quantidadeNovo" value="<?php echo $produto['quantidade'] ?>">
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="index.php" type="a" class="btn btn-secondary">Voltar ao menu</a>
</div>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>