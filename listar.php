<?php
include 'pedaco.php'
?>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Código do produto</th>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Estoque</th>
                <th scope="col">Opções</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Taclado Gamer</td>
                <td>512,00</td>
                <td>3</td>
                <td>
                    <div class="container">
                        <a href="#" type="a" class="btn btn-outline-warning">Atualizar</a>
                        <a href="#" type="a" class="btn btn-outline-danger">Apagar</a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>