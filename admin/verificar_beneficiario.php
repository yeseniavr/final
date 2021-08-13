<?php
    include('sidebar.php');
?>

<script>
  function mostrar(num) {
    var n = document.getElementById('personaNatural');
    var e = document.getElementById('personaEmp');
    if(num==0) {
      n.style.display = 'block';
      e.style.display = 'none';
    }
    else {
      e.style.display = 'block';
      n.style.display = 'none';
    }
  }
</script>

        <div class="cuerpo">
            <div class="contform">
                <form class="form_ingreso"action="actions/consul_beneficiario.php" method="POST">
                    <div class="row">
                        <div class="col-md-12">
                            DNI del Benefiario
                        <input type="text" class="form-control forminput " placeholder="DNI" aria-label="DNI" name="dni">
                        </div>
                    </div>
                    <br>
                    <br>
                    <input class="form_input" type="submit" value="consultar" class="btn btn-outline-success my-2 mr-2" name="verificar_beneficiario" id="verificar_beneficiario">
                </form>
            </div>    
    </body>
</html>