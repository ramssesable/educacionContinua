<?

  include('sesion.php');

  include('conex.php');

    

  $exp_posgrado_1=0;

  $exp_posgrado_2=0;

  $exp_posgrado_3=0;

  $exp_posgrado_4=0;

  $exp_posgrado_5=0;



  if ($rol == 1) {

    $result=mysql_query("SELECT exp_posgrado FROM datos_posgrado");

  }else{

    $result=mysql_query("SELECT exp_posgrado FROM datos_posgrado WHERE posgrado='$rol'");

  }

    while ($row2=mysql_fetch_assoc($result)) {

      if ($row2['exp_posgrado'] == "100") {

          $exp_posgrado_1++;

      }



      if ($row2['exp_posgrado'] == "75") {

          $exp_posgrado_2++;

      }



      if ($row2['exp_posgrado'] == "50") {

          $exp_posgrado_3++;



      }



      if ($row2['exp_posgrado'] == "25") {

          $exp_posgrado_4++;

      }

      if ($row2['exp_posgrado'] == "nada") {

          $exp_posgrado_5++;

      }

    }

?>

<html>

  <head>

    <title>Reporte</title>

    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="reportes.css">

    <style>

      table{

        border-collapse: collapse;

        margin: 0 auto;

      }

      th{

        background: #76923c;

      }

      .grafica{

        margin-left: 0px;

      }

      #iframe_1{

        margin-left: 385px;

        margin-top: -265px;

      }

      .main{

        margin-top: -70px;

      }

    </style>

  </head>

  <body>

    <!-- Header -->

    <div class="header">

      <!-- HEADER -->

      <h1><img src="../img/logo_uabc.png" width="50" alt=""></h1>

      <div class="texto">

        <h2><strong>Universidad Autónoma de Baja California</strong></h2>

        <h3>Facultad de Odontología</h3>

        <h3>Coordinación de Posgrado e Investigación</h3>

        <h3>Programa de seguimiento a Egresados</h3>

      </div>

      <h1><img src="../img/logo_odonto.png" width="50"></h1>

      <!--<h1><img src="../img/conacyt.png" width="70"></h1>-->

    </div>

    <div class="main">

      <label>Reporte</label>

      <table border="1">

        <thead>

          <tr>

            <th align="center">¿El posgrado que eligió cubrió sus expectativas de formación?</th>

            <th>100%</th>

            <th>75%</th>

            <th>50%</th>

            <th>25%</th>

            <th>Nada</th>

          </tr>

        </thead>

        <tbody>

          <tr >

            <td align="center"></td>

            <td align="center"><?php echo $exp_posgrado_1; ?></td>

            <td align="center"><?php echo $exp_posgrado_2; ?></td>

            <td align="center"><?php echo $exp_posgrado_3; ?></td>

            <td align="center"><?php echo $exp_posgrado_4; ?></td>

            <td align="center"><?php echo $exp_posgrado_5; ?></td>

          </tr>

          <tr class="odd">

            <td colspan="6" align="left">

                <iframe src="../graficas/js_graficas/p2.php" width="440" height="250" frameborder="0"></iframe>

            </td>

          </tr>

        </tbody>

      </table>

    </div>

    <center><a href="JavaScript:window.print();">Imprimir</a></center>
    <?echo("<center><a href='odonto_2.php?a=3&b=$b'>PDF</a></center>"); ?>

  </body>

</html>