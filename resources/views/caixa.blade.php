<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
  <title>Caixa PDV</title>
  <style>
    input[type="number"] {
      -moz-appearance: textfield;
      -webkit-appearance: textfield;
      appearance: textfield;
    }

    .product-list {
      max-height: 600px;
      overflow: scroll;
      margin-bottom: 16px;
    }

    .product-list th {
      background-color: #fff;
    }


    textarea:focus,
    textarea.form-control:focus,
    input.form-control:focus,
    input[type=text]:focus,
    input[type=password]:focus,
    input[type=email]:focus,
    input[type=number]:focus,
    [type=text].form-control:focus,
    [type=password].form-control:focus,
    [type=email].form-control:focus,
    [type=tel].form-control:focus,
    [contenteditable].form-control:focus {
      box-shadow: inset 0 -1px 0 #ddd;
    }

  </style>
</head>

<body>
  <h1 class="text-center">Caixa PDV</h1>
  <div class="container d-flex">
    <div class="col-md-6 product-list px-4 d-flex flex-column">
      <div class="product-list">
        <table class="table product-list">
          <thead class="sticky-top">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Produto</th>
              <th scope="col">Quantidade</th>
              <th scope="col">Valor unitário</th>
              <th scope="col">Total</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Produto 1</td>
              <td>1</td>
              <td>R$ 10,00</td>
              <td>R$ 10,00</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="btn-group align-self-end" role="group">
        <button type="button" onclick="renderNewVendaProduto()" class="btn btn-success"><i class="bi bi-plus-lg"></i></button>
        <button type="button" class="btn btn-warning"><i class="bi bi-folder2"></i></button>
        <button type="button" class="btn btn-danger"><i class="bi bi-dash-lg"></i></button>

      </div>
    </div>
    <div class="col-md-3 mx-4">
      <form id="item-product-form">
        <div class="form-row">
          <div class="form-group ">
            <label for="codigo_de_barras">Código de barras</label>
            <input onchange="fillProductFields(this.value)" type="number" class="form-control" id="codigo_de_barras" name="codigo_de_barras">
          </div>

          <div class="form-group ">
            <label for="produto">Produto</label>
            <input type="text" class="form-control" id="produto" name="produto">
          </div>

          <div class="form-group ">
            <label for="preco_produto">Preço</label>
            <input type="number" class="form-control" id="preco_produto" name="preco_produto">
          </div>


          <div class="form-group ">
            <label for="quantidade">Quantidade</label>
            <input type="number" class="form-control" id="quantidade" name="quantidade">
          </div>
        </div>
      </form>
    </div>

    <div class="col-md-3">

      <form id="venda-form">

        <div class="form-group ">
          <label for="cliente">Cliente</label>
          <input type="text" class="form-control" id="cliente" name="cliente">
        </div>
        <div class="form-row">
          <div class="form-group ">
            <label for="total_bruto">Total bruto</label>
            <input type="number" class="form-control" id="total_bruto" name="total_bruto">
          </div>
          <div class="form-group ">
            <label for="desconto">Desconto</label>
            <input type="number" class="form-control" id="desconto" name="desconto">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group ">
            <label for="troco">Troco</label>
            <input type="number" class="form-control" id="troco" name="troco">
          </div>
          <div class="form-group ">
            <label for="recebido">Recebido</label>
            <input type="number" class="form-control" id="recebido" name="recebido">
          </div>
        </div>
        <div class="form-group ">
          <label for="total_final">Total final</label>
          <input type="number" class="form-control" id="total_final" name="total_final">
        </div>
      </form>
    </div>

  </div>
</body>

<script src="./js/app.js">

</script>

<script>
  <script>
    window.onload = () => {
      const cpf = @json($budget->cpf);
      localStorage.setItem('cpf', cpf)
    }

</script>

</script>

</html>
