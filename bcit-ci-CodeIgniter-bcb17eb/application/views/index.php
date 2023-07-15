<!DOCTYPE html>
<html>
<head>
	<title>Codeigniter 3 Datatables Ajax Example</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js"></script>  
</head>
<style>
	body { font-size: 140%; }
  </style>
<script>
	$(document).ready(function() {
    $('#example').dataTable();
} );

  </script>
  
<body>

  </script>

	<div class="container">
	<h2>Codeigniter 3 Datatables Ajax Example</h2>
	<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>ID</th>
				<th>Titulo</th>
				<th>Descrição</th>
			</tr>
			</thead>
			<?php foreach($itens as $item_banco):?>
				<tr>
					<td><?=$item_banco['id']?></td>
					<td><?=$item_banco['titulo']?></td>
					<td><?=$item_banco['descricao']?></td>
				</tr>
				<?php endforeach?>
	</table>
</div>



</body>


<script type="text/javascript">
$(document).ready(function() {
    $('#item-list').DataTable({
        "ajax": {
            url : "/get_items",
            type : 'GET'
        },
    });
});
</script>


</html>