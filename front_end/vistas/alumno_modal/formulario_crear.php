

<?php

 //echo $_GET['resultado'];





?>


<!-- Button trigger modal -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal10">
Registrar Alumno
</button>

<button type="text" class="btn btn-info ml-3">
Buscar Alumno
</button>
<!-- <script>
$(document).ready(function(){
$("#exampleModal1").modal('show');
});
</script> -->


<!-- Styles for the inputs  -->
<style>
  .inputForm{
  border: none;
  border-bottom: 1px solid #ddd;
  }

  .inputForm:focus{
    background-color: rgb(121, 172, 210, 0.2);
  }

#img_modal{
  width: 100%;
}


</style>




<!-- Modal -->
<div class="modal fade" id="exampleModal10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
       <h4 class="modal-title  ml-auto" id="exampleModalLabel">Registro Alumnos</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    <div class="modal-body">
      <form class="needs-validation" novalidate action="../../../back_end/controladores/alumno_controlador.php" method="POST" enctype="multipart/form-data" >

        <input type="hidden" name="opcion" value="1">



        <!------------------------------------Nombres, Sexo------------------------------------------>
        
<h4>Información personal</h4>
<div class="row mt-1">

        <div class="col-4  mt-3">  
          <img src="usuario_masculino.png" alt="" id="img_modal">

          <input type="date" class="form-control mt-2 inputForm" id="validationCustom03" name="fecha_nac" required> 
 

        </div>
        
        <div class="col-8 ml-auto pt-3">
          <div class="form-row"> 
            <div class="col">
              <input type="text" class="form-control inputForm" id="validationCustom01" name="nombres" required>
              <label for="validationCustom01">Nombre(s)</label>
            </div>

            <div class="col-3 ">
            <select name="sexo" class="form-control" >
                <option value="masculino" > Masculino</option>
                <option value="femenino" >Femenino</option>

            </select>
              <label for="validationCustom02">Sexo</label>
            </div>

          </div>


          <div class="form-row"> 
            <div class="col">
              <input type="text" class="form-control inputForm" id="validationCustom01" name="apellido_pat" required>
              <label for="validationCustom01">Apellido Paterno</label>
            </div>

            <div class="col">
              <input type="text" class="form-control inputForm" id="validationCustom02" name="apellido_mat" required>
              <label for="validationCustom02">Apellido Materno</label>
            </div>
          </div>
        </div>



      </div>
<br>
<br>

     <!------------------------------------Domicilio------------------------------------------>
   
<h4>Domicilio</h4>

        <div class="form-row"> 
          <div class="col">
            <input type="text" class="form-control inputForm" id="validationCustom01" name="calle" required>
            <label for="validationCustom01">Calle</label>
          </div>

          <div class="col">
            <input type="text" class="form-control inputForm" id="validationCustom02" name="numero" required>
            <label for="validationCustom02">Numero</label>
          </div>
        </div>

        <div class="form-row"> 
          <div class="col">
            <input type="text" class="form-control inputForm" id="validationCustom03" name="colonia" required>
            <label for="validationCustom03">Colonia</label>
          </div>
          
          <div class="col">
            <input type="text" class="form-control inputForm" id="validationCustom03" name="cp" required>
            <label for="validationCustom03">Codigo Postal</label>
          </div>
        </div>

        <br>
    </div>

      <div class="modal-footer">
        <input type="submit" class=" col-8 btn btn-primary mx-auto" value="Registrar Tutor">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>

      </form>
    </div>
  </div>
</div>














  <script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
  })();
  </script>


</body>
</html>