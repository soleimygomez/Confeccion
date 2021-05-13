<div>
 

<script>
        $(document).ready(function () {
            $('#datos').DataTable({
                language: {
                    processing: "Tratamiento en curso...",
                    search: " Buscar&nbsp;:",
                    lengthMenu: "Agrupar de _MENU_ items",
                    info: "Mostrando del item _START_ al _END_ de un total de _TOTAL_ items",
                    infoEmpty: "No existen datos.",
                    infoFiltered: "(filtrado de _MAX_ elementos en total)",
                    infoPostFix: "",
                    loadingRecords: "Cargando...",
                    zeroRecords: "No se encontraron datos con tu busqueda",
                    emptyTable: "No hay datos disponibles en la tabla.",
                    paginate: {
                        first: "Primero",
                        previous: "Anterior",
                        next: "Siguiente",
                        last: "Ultimo"
                    },
                    aria: {
                        sortAscending: ": active para ordenar la columna en orden ascendente",
                        sortDescending: ": active para ordenar la columna en orden descendente"
                    }
                },
                scrollY: 400,
                lengthMenu: [ [10, 25, -1], [10, 25, "All"] ],
            });
        });
    </script>


       <center><h1 style="color: #806B39"> LISTA DE PEDIDOS </h1></center>
       

      </form>
        <div class="table-responsive table-hover " style="padding: 20px; " >
           <table id="datos"  style="width:100%; background-color:#806B39 ; border-radius:10px; opacity:none; color: white; text-align: center; padding: 20px;">
              <thead >
                  <tr >
                  
                    <th ><center><B>ID</B></center></th>
                    <th ><center><B>CLIENTE</B></center></th>
                    <th ><center><B>PRECIO</B></center></th>
                    <th ><center><B>ABONO</B></center></th>
                    
                    <th ><center><B>FECHA INICIO</B></center></th>
                    <th ><center><B>FECHA ENTREGA</B></center></th>
                     <th ><center><B>DISEÑO</B></center></th>
                     <th ><center><B>TIPO DE TELA</B></center></th>
                     <th ><center><B>OBSERVACION </B></center></th>
                     <th ><center><B>ACCION</B></center></th>

                </tr>
                 </thead>
                <tbody>
                     <?php foreach ($listaPedido  as $pedidos) { ?>
                      <?php foreach ($listaCliente  as $clientes) { ?>
                        <?php
                                   $idCliente = $clientes->getId_cliente(); 
                                   $idPedidoCliente = $pedidos->getCliente(); 
                                   $nombre = $clientes->getNombre();
                                   $imagen          = $pedidos->getModelo();
                                   $idModeloPedido  = $pedidos->getModelo();    
                         if( $idCliente == $idPedidoCliente ){
                          ?> 
                        <td style="padding: 10px; "><?php echo $pedidos->getid_Pedido();?></td>
                        <td style="padding: 10px; "><?php echo $nombre; } } ?></td>             
                        <td style="padding: 10px; "> <?php echo $pedidos->getPrecio(); ?> </td>
                        <td style="padding: 10px; "> <?php echo $pedidos->getAbono();  ?> </td>
                       
                        <td style="padding: 10px; "> <?php echo $pedidos->getFecha_inicio(); ?></td>
                        <td style="padding: 10px; "> <?php echo $pedidos->getFecha_entrega();?></td>
                          

                        <?php 
                            include("../../../Controllers/conexion.php");

                            $query = "SELECT * FROM modelo";
                            $res   = $conexion->query($query);
                            while ($row = $res->fetch_assoc()) {
                                if ($row['id'] == $idModeloPedido) {
                                  
                                
                              ?>
                              
                          <td><img height="70px" src="data:image/jpeg;base64,<?php echo base64_encode($row['imagen']); ?>"></td>
                              <td><img height="70px" src="data:image/jpeg;base64,<?php echo base64_encode($row['tipo_tela']); ?>"></td>  
                              <td style="padding: 10px; "> <?php echo $pedidos->getObservacion();?></td>
                          <?php
                               } }

                           ?>





                        <td style="padding: 10px; "> <?php echo $pedidos->getTipo_tela();?></td>
                         <td style="padding: 10px; ">
                            <a  class="btn btn-sm "style="background-color:#d79c26;color:black;" href="?controller=pedidos&&action=delete&&id_Pedido=<?php 
                                echo $pedidos->getid_Pedido() ?>" >
                                                  Eliminar
                                          </a>| 
                           
                            <a class="btn btn-sm btn-danger"style="  color:black;" href="?controller=pedidos&&action=updateshow&&id_Pedido=<?php 
                                echo $pedidos->getid_Pedido() ?>"  >  
                                                  Editar
                                          </a>| 

                          </td>
                    </tr>
                    <?php } ?>
                </tbody>

            </thead>
        </table>

    </div>  
<div>
  <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
        </script>
    <!-- DATATABLES -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js">
    </script>
    <!-- BOOTSTRAP -->
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js">
    </script> 