<?php

$vals = ValData::getAll();

?>
<div class="row">
<div class="col-md-12">


<!-- Button trigger modal -->
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
  Nuevo Valor
</button>
<br><br>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar Actividad</h4>
      </div>
      <div class="modal-body">
<form method="post" action="./?action=vals&opt=add">
  <div class="form-group">Actividad
    <input type="text" name="k" class="form-control" id="exampleInputEmail1" placeholder="Etiqueta">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Calificacionr</label>
    <input type="text" name="v" class="form-control" id="exampleInputPassword1" placeholder="Valor">
  </div>
  <div class="form-group">Numero de Tarea o Fecha dd/mm/aaaa
    <input type="text" name="o" class="form-control" id="exampleInputPassword1" placeholder="Orden">
  </div>

  <button type="submit" class="btn btn-primary">Agregar Valor</button>
</form>

      </div>
    </div>
  </div>
</div>

<div class="panel panel-default">
<div class="panel-heading">Tabla y Grafica</div>
<div class="panel-body">
<?php if(count($vals)>0):?>
<div id="chart"></div>
<br><br>
	<table class="table table-bordered">
		<thead>
			<th>Actividad</th>
			<th>Valor</th>
			<th>Orden</th>
			<th>Eliminar</th>
            <th>Modificar</th>
		</thead>
		<?php foreach($vals as $x):?>
			<tr>
				<td><?php echo $x->k; ?></td>
				<td><?php echo $x->v; ?></td>
				<td><?php echo $x->o; ?></td>
				<td style="width: 30px;">
					<a href="./?action=vals&opt=del&id=<?php echo $x->id; ?>" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
				</td>
			</tr>
		<?php endforeach;?>
	</table>
<?php else:?>
	<p class="alert alert-warning">No hay valores, por favor agrega uno o varios en el boton "Nuevo Valor".</p>
<?php endif; ?>

</div>
</div>

<script>
  Highcharts.chart('chart', {
    title: {
        text: 'GRAFICA DE BURNDOWN CHART'
    },
    subtitle: {
        text: 'JOSE MACIAS MUÑOZ'
    },
    yAxis: {
        title: {
            text: 'Valor Y'
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },
    xAxis:{
      categories: [
      <?php foreach($vals as $x):?>
      "<?php echo $x->k;?>",
      <?php endforeach;?>
      ],
    },
    series: [{
        name: '2019',
        data: [
        <?php foreach($vals as $x):?>
        <?php echo $x->v;?>,
        <?php endforeach;?> 
        ],
        color:'#f00'
    }]

});
</script>
</div>
</div>