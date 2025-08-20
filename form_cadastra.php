<?php
include 'pedaco.php'
?>
<div class="container">
    <br>
    <h1>Formaulário para cadastro de produto</h1>
    <form action="inserir.php" method="POST">
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="Escreva aqui o nome do produto!" name="nome">
        </div>

        <div class="mb-3">
            <input type="text" class="form-control" placeholder="Escreva aqui o preço do produto!" name="preço">
        </div>

        <div class="mb-3">
            <input type="text" class="form-control" placeholder="Escreva aqui a quantidade do produto!" name="quantidade">
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
</div>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>