
<h2 class="text-center mb-4">Produtos em Destaque</h2>
    <div class="row">
      <?php
      $sql = "SELECT * FROM produtos LIMIT 4";
      $resultado = $conexao->query($sql);
      while ($produto = $resultado->fetch_assoc()) {
      ?>
        <div class="col-md-3 mb-4">
          <div class="card h-100">
            <img src="<?= $produto['imagem'] ?>" class="card-img-top" alt="<?= $produto['nome_produto'] ?>">
            <div class="card-body">
              <h5 class="card-title"><?= $produto['nome_produto'] ?></h5>
              <p class="card-text">R$ <?= number_format($produto['preco'], 2, ',', '.') ?></p>
              <a href="detalhe.php?id=<?= $produto['id'] ?>" class="btn btn-primary w-100">Ver Detalhes</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>