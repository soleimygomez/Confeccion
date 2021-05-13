
<div>
    
<CENTER> <H2 style="width: 400px; color: #806B39;"><b>EDITAR  PEDIDO </b> </H2> </CENTER>   
  <div class="row" style="padding: 20px;">  <!-- fila principal  -->
<div class="form-group" style="padding: 20px; border: solid #806B39; border-radius: 1em ; width: 500px; margin-left: 420px; color: black;">
     <center><h3>DATOS PERSONALES</h3></center> <hr>

      <input type="text" name="id_Pedido" style="display: none;" value="<?php echo $pedido->getId_Pedido() ?>" >
      <!--  -->
     <p>Ingrese Modelo:
        <input type="file" name="imagen" class="form-control mr-sm-1" value="<?php echo $pedido->getModelo() ?>" >
      </p>
      <!--  -->

      <p>Tipo de tela: 
         <input type="file" name="tipo_tela" class="form-control mr-sm-1" value="<?php echo $pedido->getTipo_tela() ?>" >
      </p>
      <!--  -->

      <p>Fecha pedido: 
        <input type="date" name="fecha_inicio" class="form-control mr-sm-1"  value="<?php echo $pedido->getFecha_inicio() ?>">
      </p>
      <!--  -->

      <p>Fecha de entrega: 
        <input type="date" name="fecha_entrega" class="form-control mr-sm-1"  value="<?php echo $pedido->getFecha_entrega() ?>" >
      </p>
      <!--  -->

      <p>Precio: 
        <input type="text" name="precio" class="form-control mr-sm-1"  value="<?php echo $pedido->getPrecio() ?>" >
      </p>
      <!--  -->

      <p>Abono: 
        <input type="text" name="abono" class="form-control mr-sm-1"  value="<?php echo $pedido->getAbono() ?>" >
      </p>
      <!--  -->

      <p>Observacion: 
        <input type="text" name="observacion" class="form-control mr-sm-1"  value="<?php echo $pedido->getObservacion() ?>" >
      </p>

      <input type="submit" name="registrar" class="btn " value="Actualizar Pedido" style="background-color:#806B39; color: white;">
    </div>


  

 
 </div>



</div>
