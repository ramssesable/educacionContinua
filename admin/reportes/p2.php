<?

  include('sesion.php');

  include('conex.php');

    

  $el_posgrado_1=0;

  $el_posgrado_2=0;

  $el_posgrado_3=0;

  $el_posgrado_4=0;



  if ($rol == 1) {

    $result=mysql_query("SELECT el_posgrado FROM datos_posgrado");

  }else{

    $result=mysql_query("SELECT el_posgrado FROM datos_posgrado WHERE posgrado='$rol'");

  }

    while ($row2=mysql_fetch_assoc($result)) {

      if ($row2['el_posgrado'] == "Primera eleccion") {



                $el_posgrado_1++;



            }



            if ($row2['el_posgrado'] == "Segunda eleccion") {



                $el_posgrado_2++;



            }



            if ($row2['el_posgrado'] == "Ultima eleccion") {



                $el_posgrado_3++;



            }



            if ($row2['el_posgrado'] == "Unica eleccion") {



                $el_posgrado_4++;



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

            <th align="center">Al momento de elegir el posgrado, la Facultad de Odontología Mexicali fue su:</th>

            <th>Primera elección</th>

            <th>Segunda elección</th>

            <th>última elección </th>

            <th>única eleccion</th>

          </tr>

        </thead>

        <tbody>

          <tr >

            <td align="center"></td>

            <td align="center"><?php echo $el_posgrado_1; ?></td>

            <td align="center"><?php echo $el_posgrado_2; ?></td>

            <td align="center"><?php echo $el_posgrado_3; ?></td>

            <td align="center"><?php echo $el_posgrado_4; ?></td>

          </tr>

          <tr class="odd">

            <td colspan="6" align="left">

                <iframe src="../graficas/js_graficas/p1.php" width="440" height="250" frameborder="0"></iframe>

            </td>

          </tr>

        </tbody>

      </table>

    </div>

    <center><a href="JavaScript:window.print();">Imprimir</a></center>

	<?echo("<center><a href='odonto_2.php?a=2&b=$b'>PDF</a></center>"); ?>

  </body>

</html>