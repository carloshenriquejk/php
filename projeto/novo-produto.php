<h1 class="mb-3">Novo produto</h1>
<form action="?page=salvar" method="POST">
	<input type="hidden" name="acao" value="novo-produto">
	<div class="mb-3 mt-3">
		<label>Nome:</label>
		<input type="text" name="nome_produto" class="form-control">
	</div>

	<div class="mb-3 mt-3">
		<label>Quantidade:</label>
		<input type="number" name="quantidade" class="form-control">
	</div>		

	<div class="mb-3 mt-3">
		<label>Valor:</label>
		<input type="number" name="valor" class="form-control">
	</div>

		<div class="mb-3 mt-3">
		<label>Total:</label>
		<input type="number" name="total" class="form-control">
	</div>

		<div class="mb-3 mt-3">
		<label>Descricao:</label>
		<input type="text" name="descricao" class="form-control">
	</div>

	<div class="mb-3">
		<label>Data :</label>
		<input type="date" name="data" class="form-control">
	</div>

		</div>
		<div class="mb-3">
	<button class="btn btn-primary" type="submit">Enviar</button>
	</div>


</form>