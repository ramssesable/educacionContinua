<?
  include('sesion.php');
  include('conex.php');
    
  $mot_1=0;$mot_2=0;$mot_3=0;$mot_4=0;$mot_5=0;
  $mot2_1=0;$mot2_2=0;$mot2_3=0;$mot2_4=0;$mot2_5=0;
  $mot3_1=0;$mot3_2=0;$mot3_3=0;$mot3_4=0;$mot3_5=0;
  $mot4_1=0;$mot4_2=0;$mot4_3=0;$mot4_4=0;$mot4_5=0;
  $mot5_1=0;$mot5_2=0;$mot5_3=0;$mot5_4=0;$mot5_5=0;

  if ($rol == 1) {
    $mot1=mysql_query("SELECT mot_1,mot_2,mot_3,mot_4,mot_5 FROM datos_posgrado");
  }else{
    $mot1=mysql_query("SELECT mot_1,mot_2,mot_3,mot_4,mot_5 FROM datos_posgrado WHERE posgrado='$rol'");
  }
  
  while ($row=mysql_fetch_assoc($mot1)) {
    if ($row['mot_1'] == 1) {
      $mot_1++;
    }
    if ($row['mot_1'] == 2) {
      $mot_2++;
    }
    if ($row['mot_1'] == 3) {
      $mot_3++;
    }
    if ($row['mot_1'] == 4) {
      $mot_4++;
    }
    if ($row['mot_1'] == 5) {
      $mot_5++;
    }
    if ($row['mot_2'] == 1) {
      $mot2_1++;
    }
    if ($row['mot_2'] == 2) {
      $mot2_2++;
    }
    if ($row['mot_2'] == 3) {
      $mot2_3++;
    }
    if ($row['mot_2'] == 4) {
      $mot2_4++;
    }
    if ($row['mot_2'] == 5) {
      $mot2_5++;
    }
    if ($row['mot_3'] == 1) {
      $mot3_1++;
    }
    if ($row['mot_3'] == 2) {
      $mot3_2++;
    }
    if ($row['mot_3'] == 3) {
      $mot3_3++;
    }
    if ($row['mot_3'] == 4) {
      $mot3_4++;
    }
    if ($row['mot_3'] == 5) {
      $mot3_5++;
    }
    if ($row['mot_4'] == 1) {
      $mot4_1++;
    }
    if ($row['mot_4'] == 2) {
      $mot4_2++;
    }
    if ($row['mot_4'] == 3) {
      $mot4_3++;
    }
    if ($row['mot_4'] == 4) {
      $mot4_4++;
    }
    if ($row['mot_4'] == 5) {
      $mot4_5++;
    }
    if ($row['mot_5'] == 1) {
      $mot5_1++;
    }
    if ($row['mot_5'] == 2) {
      $mot5_2++;
    }
    if ($row['mot_5'] == 3) {
      $mot5_3++;
    }
    if ($row['mot_5'] == 4) {
      $mot5_4++;
    }
    if ($row['mot_5'] == 5) {
      $mot5_5++;
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
            <th align="center">Principal motivo por el cuál realizó el posgrado</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
          </tr>
        </thead>
        <tbody>
          <tr >
            <td align="center">Para mejorar mi preparación</td>
            <td><?php echo $mot_1; ?></td>
            <td><?php echo $mot_2; ?></td>
            <td><?php echo $mot_3; ?></td>
            <td><?php echo $mot_4; ?></td>
            <td><?php echo $mot_5; ?></td>
          </tr>
          <tr>
            <td align="center">Para desarrollar mi actual ámbito laboral</td> 
            <td><?php echo $mot2_1; ?></td> 
            <td><?php echo $mot2_2; ?></td>
            <td><?php echo $mot2_3; ?></td>
            <td><?php echo $mot2_4; ?></td>
            <td><?php echo $mot2_5; ?></td>
          </tr>
          <tr>
            <td align="center">Para acceder a una beca económica</td>
            <td><?php echo $mot3_1; ?></td>
            <td><?php echo $mot3_2; ?></td>
            <td><?php echo $mot3_3; ?></td>
            <td><?php echo $mot3_4; ?></td>
            <td><?php echo $mot3_5; ?></td>
          </tr>
          <tr>
            <td align="center">Por status</td>
            <td><?php echo $mot4_1; ?></td>
            <td><?php echo $mot4_2; ?></td>
            <td><?php echo $mot4_3; ?></td>
            <td><?php echo $mot4_4; ?></td>
            <td><?php echo $mot4_5; ?></td>
          </tr>
          <tr>
            <td align="center">Otro</td>
            <td><?php echo $mot5_1; ?></td>
            <td><?php echo $mot5_2; ?></td>
            <td><?php echo $mot5_3; ?></td>
            <td><?php echo $mot5_4; ?></td>
            <td><?php echo $mot5_5; ?></td>
          </tr>
          <tr class="odd">
            <td colspan="6" align="left">
                <iframe src="../graficas/js_graficas/mot_1.php" width="440" height="250" frameborder="0"></iframe>
                <iframe src="../graficas/js_graficas/mot_2.php" width="440" height="250" frameborder="0"></iframe>
                <iframe src="../graficas/js_graficas/mot_3.php" width="440" height="250" frameborder="0"></iframe>
                <iframe src="../graficas/js_graficas/mot_4.php" width="440" height="250" frameborder="0"></iframe>
                <iframe src="../graficas/js_graficas/mot_5.php" width="440" height="250" frameborder="0"></iframe>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <center><a href="JavaScript:window.print();">Imprimir</a></center>
  </body>
</html>