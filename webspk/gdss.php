<!DOCTYPE html>
<html>
<head>

    <title >WEBSITE SPK</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" style="color: black"; href="">Sistem Pendukung Keputusan</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="index.php">HOME</a></li>
                <li class="active"><a href="ahp.php">AHP</a></li>    
                <li class="active"><a href="electree.php">ELECTREE</a></li>              
                <li class="active"><a href="gdss.php">GDSS</a></li>
                <li class="active"><a href="moora.php">MOORA</a></li>
                <li class="active"><a href="saw.php"><b>SAW</b></a></li>
                <li class="active"><a href="topsis.php"><b>TOPSIS</b></a></li>
                <li class="active"><a href="wp.php"><b>WP</b></a></li>
            
            </ul>
        </div>
    </nav>  
    
    

<html lang="en"
<head>
    <title>HOME</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery.js"></script>
    <script src="js.bootstrap.js"></script>
</head>
<body>
    <div class="container">
    <div class="jumbotron">
        <html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    


</head>

<body>


    <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <br>
      <center><h1><b>Metode GDSS</b></h1></center>
    <br>
    <br>
    <br>
    <br>
    <h5>Bobot Kriteria</h5>
    <table class="table">
        <thead>
            <tr>
                <th>C1</th><th>C2</th><th>C3</th><th>C4</th><th>C5</th><th>C6</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php $BC1 = 0.29; echo $BC1;?></td>
                <td><?php $BC2 = 0.173; echo $BC2;?></td>
                <td><?php $BC3 = 0.091; echo $BC3;?></td>
                <td><?php $BC4 = 0.162; echo $BC4;?></td>
                <td><?php $BC5 = 0.08; echo $BC5;?></td>
                <td><?php $BC6 = 0.204; echo $BC6;?></td>
            </tr>
        </tbody>
    </table>
    <h5>Juri 1</h5>
    <table class="table">
        <thead>
            <tr>
                <th>Alternatif</th>
                <th>C1</th>
                <th>C2</th>
                <th>C3</th>
                <th>C4</th>
                <th>C5</th>
                <th>C6</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>A1</th>
                <td><?php $J1A1C1 = 1; echo $J1A1C1?></td>
                <td><?php $J1A1C2 = 1; echo $J1A1C2?></td>
                <td><?php $J1A1C3 = 3; echo $J1A1C3?></td>
                <td><?php $J1A1C4 = 4; echo $J1A1C4?></td>
                <td><?php $J1A1C5 = 1; echo $J1A1C5?></td>
                <td><?php $J1A1C6 = 4; echo $J1A1C6?></td>
            </tr>
            <tr>
                <th>A2</th>
                <td><?php $J1A2C1 = 1; echo $J1A2C1?></td>
                <td><?php $J1A2C2 = 1; echo $J1A2C2?></td>
                <td><?php $J1A2C3 = 4; echo $J1A2C3?></td>
                <td><?php $J1A2C4 = 3; echo $J1A2C4?></td>
                <td><?php $J1A2C5 = 1; echo $J1A2C5?></td>
                <td><?php $J1A2C6 = 3; echo $J1A2C6?></td>
            </tr>
            <tr>
                <th>A3</th>
                <td><?php $J1A3C1 = 1; echo $J1A3C1?></td>
                <td><?php $J1A3C2 = 1; echo $J1A3C2?></td>
                <td><?php $J1A3C3 = 4; echo $J1A3C3?></td>
                <td><?php $J1A3C4 = 4; echo $J1A3C4?></td>
                <td><?php $J1A3C5 = 1; echo $J1A3C5?></td>
                <td><?php $J1A3C6 = 4; echo $J1A3C6?></td>
            </tr>
            <tr>
                <th>A4</th>
                <td><?php $J1A4C1 = 1; echo $J1A4C1?></td>
                <td><?php $J1A4C2 = 1; echo $J1A4C2?></td>
                <td><?php $J1A4C3 = 3; echo $J1A4C3?></td>
                <td><?php $J1A4C4 = 3; echo $J1A4C4?></td>
                <td><?php $J1A4C5 = 0; echo $J1A4C5?></td>
                <td><?php $J1A4C6 = 3; echo $J1A4C6?></td>
            </tr>
            <tr>
                <th>A5</th>
                <td><?php $J1A5C1 = 1; echo $J1A5C1?></td>
                <td><?php $J1A5C2 = 1; echo $J1A5C2?></td>
                <td><?php $J1A5C3 = 3; echo $J1A5C3?></td>
                <td><?php $J1A5C4 = 3; echo $J1A5C4?></td>
                <td><?php $J1A5C5 = 1; echo $J1A5C5?></td>
                <td><?php $J1A5C6 = 4; echo $J1A5C6?></td>
            </tr>
        </tbody>
    </table>
    <h5>Matrix Normalisasi</h5>
    <table class="table">
        <thead>
            <tr>
                <th>A</th>
                <th>C1</th>
                <th>C2</th>
                <th>C3</th>
                <th>C4</th>
                <th>C5</th>
                <th>C6</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>A1</th>
                <td><?php $J1RA1C1 = $J1A1C1/sqrt(pow($J1A1C1,2)+pow($J1A2C1,2)+pow($J1A3C1,2)+pow($J1A4C1,2)+pow($J1A5C1,2)); echo $J1RA1C1;?></td>
                <td><?php $J1RA1C2 = $J1A1C2/sqrt(pow($J1A1C2,2)+pow($J1A2C2,2)+pow($J1A3C2,2)+pow($J1A4C2,2)+pow($J1A5C2,2)); echo $J1RA1C2;?></td>
                <td><?php $J1RA1C3 = $J1A1C3/sqrt(pow($J1A1C3,2)+pow($J1A2C3,2)+pow($J1A3C3,2)+pow($J1A4C3,2)+pow($J1A5C3,2)); echo $J1RA1C3;?></td>
                <td><?php $J1RA1C4 = $J1A1C4/sqrt(pow($J1A1C4,2)+pow($J1A2C4,2)+pow($J1A3C4,2)+pow($J1A4C4,2)+pow($J1A5C4,2)); echo $J1RA1C4;?></td>
                <td><?php $J1RA1C5 = $J1A1C5/sqrt(pow($J1A1C5,2)+pow($J1A2C5,2)+pow($J1A3C5,2)+pow($J1A4C5,2)+pow($J1A5C5,2)); echo $J1RA1C5;?></td>
                <td><?php $J1RA1C6 = $J1A1C6/sqrt(pow($J1A1C6,2)+pow($J1A2C6,2)+pow($J1A3C6,2)+pow($J1A4C6,2)+pow($J1A5C6,2)); echo $J1RA1C6;?></td>
            </tr>
            <tr>
                <th>A2</th>
                <td><?php $J1RA2C1 = $J1A2C1/sqrt(pow($J1A1C1,2)+pow($J1A2C1,2)+pow($J1A3C1,2)+pow($J1A4C1,2)+pow($J1A5C1,2)); echo $J1RA2C1;?></td>
                <td><?php $J1RA2C2 = $J1A2C2/sqrt(pow($J1A1C2,2)+pow($J1A2C2,2)+pow($J1A3C2,2)+pow($J1A4C2,2)+pow($J1A5C2,2)); echo $J1RA2C2;?></td>
                <td><?php $J1RA2C3 = $J1A2C3/sqrt(pow($J1A1C3,2)+pow($J1A2C3,2)+pow($J1A3C3,2)+pow($J1A4C3,2)+pow($J1A5C3,2)); echo $J1RA2C3;?></td>
                <td><?php $J1RA2C4 = $J1A2C4/sqrt(pow($J1A1C4,2)+pow($J1A2C4,2)+pow($J1A3C4,2)+pow($J1A4C4,2)+pow($J1A5C4,2)); echo $J1RA2C4;?></td>
                <td><?php $J1RA2C5 = $J1A2C5/sqrt(pow($J1A1C5,2)+pow($J1A2C5,2)+pow($J1A3C5,2)+pow($J1A4C5,2)+pow($J1A5C5,2)); echo $J1RA2C5;?></td>
                <td><?php $J1RA2C6 = $J1A2C6/sqrt(pow($J1A1C6,2)+pow($J1A2C6,2)+pow($J1A3C6,2)+pow($J1A4C6,2)+pow($J1A5C6,2)); echo $J1RA2C6;?></td>
            </tr>
            <tr>
                <th>A3</th>
                <td><?php $J1RA3C1 = $J1A3C1/sqrt(pow($J1A1C1,2)+pow($J1A2C1,2)+pow($J1A3C1,2)+pow($J1A4C1,2)+pow($J1A5C1,2)); echo $J1RA3C1;?></td>
                <td><?php $J1RA3C2 = $J1A3C2/sqrt(pow($J1A1C2,2)+pow($J1A2C2,2)+pow($J1A3C2,2)+pow($J1A4C2,2)+pow($J1A5C2,2)); echo $J1RA3C2;?></td>
                <td><?php $J1RA3C3 = $J1A3C3/sqrt(pow($J1A1C3,2)+pow($J1A2C3,2)+pow($J1A3C3,2)+pow($J1A4C3,2)+pow($J1A5C3,2)); echo $J1RA3C3;?></td>
                <td><?php $J1RA3C4 = $J1A3C4/sqrt(pow($J1A1C4,2)+pow($J1A2C4,2)+pow($J1A3C4,2)+pow($J1A4C4,2)+pow($J1A5C4,2)); echo $J1RA3C4;?></td>
                <td><?php $J1RA3C5 = $J1A3C5/sqrt(pow($J1A1C5,2)+pow($J1A2C5,2)+pow($J1A3C5,2)+pow($J1A4C5,2)+pow($J1A5C5,2)); echo $J1RA3C5;?></td>
                <td><?php $J1RA3C6 = $J1A3C6/sqrt(pow($J1A1C6,2)+pow($J1A2C6,2)+pow($J1A3C6,2)+pow($J1A4C6,2)+pow($J1A5C6,2)); echo $J1RA3C6;?></td>
            </tr>
            <tr>
                <th>A4</th>
                <td><?php $J1RA4C1 = $J1A4C1/sqrt(pow($J1A1C1,2)+pow($J1A2C1,2)+pow($J1A3C1,2)+pow($J1A4C1,2)+pow($J1A5C1,2)); echo $J1RA4C1;?></td>
                <td><?php $J1RA4C2 = $J1A4C2/sqrt(pow($J1A1C2,2)+pow($J1A2C2,2)+pow($J1A3C2,2)+pow($J1A4C2,2)+pow($J1A5C2,2)); echo $J1RA4C2;?></td>
                <td><?php $J1RA4C3 = $J1A4C3/sqrt(pow($J1A1C3,2)+pow($J1A2C3,2)+pow($J1A3C3,2)+pow($J1A4C3,2)+pow($J1A5C3,2)); echo $J1RA4C3;?></td>
                <td><?php $J1RA4C4 = $J1A4C4/sqrt(pow($J1A1C4,2)+pow($J1A2C4,2)+pow($J1A3C4,2)+pow($J1A4C4,2)+pow($J1A5C4,2)); echo $J1RA4C4;?></td>
                <td><?php $J1RA4C5 = $J1A4C5/sqrt(pow($J1A1C5,2)+pow($J1A2C5,2)+pow($J1A3C5,2)+pow($J1A4C5,2)+pow($J1A5C5,2)); echo $J1RA4C5;?></td>
                <td><?php $J1RA4C6 = $J1A4C6/sqrt(pow($J1A1C6,2)+pow($J1A2C6,2)+pow($J1A3C6,2)+pow($J1A4C6,2)+pow($J1A5C6,2)); echo $J1RA4C6;?></td>
            </tr>
            <tr>
                <th>A5</th>
                <td><?php $J1RA5C1 = $J1A5C1/sqrt(pow($J1A1C1,2)+pow($J1A2C1,2)+pow($J1A3C1,2)+pow($J1A4C1,2)+pow($J1A5C1,2)); echo $J1RA5C1;?></td>
                <td><?php $J1RA5C2 = $J1A5C2/sqrt(pow($J1A1C2,2)+pow($J1A2C2,2)+pow($J1A3C2,2)+pow($J1A4C2,2)+pow($J1A5C2,2)); echo $J1RA5C2;?></td>
                <td><?php $J1RA5C3 = $J1A5C3/sqrt(pow($J1A1C3,2)+pow($J1A2C3,2)+pow($J1A3C3,2)+pow($J1A4C3,2)+pow($J1A5C3,2)); echo $J1RA5C3;?></td>
                <td><?php $J1RA5C4 = $J1A5C4/sqrt(pow($J1A1C4,2)+pow($J1A2C4,2)+pow($J1A3C4,2)+pow($J1A4C4,2)+pow($J1A5C4,2)); echo $J1RA5C4;?></td>
                <td><?php $J1RA5C5 = $J1A5C5/sqrt(pow($J1A1C5,2)+pow($J1A2C5,2)+pow($J1A3C5,2)+pow($J1A4C5,2)+pow($J1A5C5,2)); echo $J1RA5C5;?></td>
                <td><?php $J1RA5C6 = $J1A5C6/sqrt(pow($J1A1C6,2)+pow($J1A2C6,2)+pow($J1A3C6,2)+pow($J1A4C6,2)+pow($J1A5C6,2)); echo $J1RA5C6;?></td>
            </tr>
        </tbody>
    </table>
    <h5>Matrix Normalisasi Berbobot</h5>
    <table class="table">
        <thead>
            <tr>
                <th>V</th><th>C1</th><th>C2</th><th>C4</th><th>C5</th><th>C6</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>A1</th>
                <td><?php $J1VA1C1 = $J1RA1C1 * $BC1; echo $J1VA1C1?></td>
                <td><?php $J1VA1C2 = $J1RA1C2 * $BC2; echo $J1VA1C2?></td>
                <td><?php $J1VA1C3 = $J1RA1C3 * $BC3; echo $J1VA1C3?></td>
                <td><?php $J1VA1C4 = $J1RA1C4 * $BC4; echo $J1VA1C4?></td>
                <td><?php $J1VA1C5 = $J1RA1C5 * $BC5; echo $J1VA1C5?></td>
                <td><?php $J1VA1C6 = $J1RA1C6 * $BC6; echo $J1VA1C6?></td>
            </tr>
            <tr>
                <th>A2</th>
                <td><?php $J1VA2C1 = $J1RA2C1 * $BC1; echo $J1VA2C1?></td>
                <td><?php $J1VA2C2 = $J1RA2C2 * $BC2; echo $J1VA2C2?></td>
                <td><?php $J1VA2C3 = $J1RA2C3 * $BC3; echo $J1VA2C3?></td>
                <td><?php $J1VA2C4 = $J1RA2C4 * $BC4; echo $J1VA2C4?></td>
                <td><?php $J1VA2C5 = $J1RA2C5 * $BC5; echo $J1VA2C5?></td>
                <td><?php $J1VA2C6 = $J1RA2C6 * $BC6; echo $J1VA2C6?></td>
            </tr>
            <tr>
                <th>A3</th>
                <td><?php $J1VA3C1 = $J1RA3C1 * $BC1; echo $J1VA3C1?></td>
                <td><?php $J1VA3C2 = $J1RA3C2 * $BC2; echo $J1VA3C2?></td>
                <td><?php $J1VA3C3 = $J1RA3C3 * $BC3; echo $J1VA3C3?></td>
                <td><?php $J1VA3C4 = $J1RA3C4 * $BC4; echo $J1VA3C4?></td>
                <td><?php $J1VA3C5 = $J1RA3C5 * $BC5; echo $J1VA3C5?></td>
                <td><?php $J1VA3C6 = $J1RA3C6 * $BC6; echo $J1VA3C6?></td>
            </tr>
            <tr>
                <th>A4</th>
                <td><?php $J1VA4C1 = $J1RA4C1 * $BC1; echo $J1VA4C1?></td>
                <td><?php $J1VA4C2 = $J1RA4C2 * $BC2; echo $J1VA4C2?></td>
                <td><?php $J1VA4C3 = $J1RA4C3 * $BC3; echo $J1VA4C3?></td>
                <td><?php $J1VA4C4 = $J1RA4C4 * $BC4; echo $J1VA4C4?></td>
                <td><?php $J1VA4C5 = $J1RA4C5 * $BC5; echo $J1VA4C5?></td>
                <td><?php $J1VA4C6 = $J1RA4C6 * $BC6; echo $J1VA4C6?></td>
            </tr>
            <tr>
                <th>A5</th>
                <td><?php $J1VA5C1 = $J1RA5C1 * $BC1; echo $J1VA5C1?></td>
                <td><?php $J1VA5C2 = $J1RA5C2 * $BC2; echo $J1VA5C2?></td>
                <td><?php $J1VA5C3 = $J1RA5C3 * $BC3; echo $J1VA5C3?></td>
                <td><?php $J1VA5C4 = $J1RA5C4 * $BC4; echo $J1VA5C4?></td>
                <td><?php $J1VA5C5 = $J1RA5C5 * $BC5; echo $J1VA5C5?></td>
                <td><?php $J1VA5C6 = $J1RA5C6 * $BC6; echo $J1VA5C6?></td>
            </tr>
        </tbody>
    </table>
    <h5>Nilai Ranking</h5>
    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th>MAX</th>
                <th>MIN</th>
                <th>Yi</th>
                <th>Rank</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>A1</th>
                <td><?php $J1MAXA1 = $J1VA1C1+$J1VA1C2+$J1VA1C5+$J1VA1C6; echo $J1MAXA1?></td>
                <td><?php $J1MINA1 = $J1VA1C3+$J1VA1C4; echo $J1MINA1;?></td>
                <td><?php $J1YIA1 = $J1MAXA1 - $J1MINA1; echo $J1YIA1;?></td>
                <td>2</td>
            </tr>
            <tr>
                <th>A2</th>
                <td><?php $J1MAXA2 = $J1VA2C1+$J1VA2C2+$J1VA2C5+$J1VA2C6; echo $J1MAXA2?></td>
                <td><?php $J1MINA2 = $J1VA2C3+$J1VA2C4; echo $J1MINA2;?></td>
                <td><?php $J1YIA2 = $J1MAXA2 - $J1MINA2; echo $J1YIA2;?></td>
                <td>4</td>
            </tr>
            <tr>
                <th>A3</th>
                <td><?php $J1MAXA3 = $J1VA3C1+$J1VA3C2+$J1VA3C5+$J1VA3C6; echo $J1MAXA3?></td>
                <td><?php $J1MINA3 = $J1VA3C3+$J1VA3C4; echo $J1MINA3;?></td>
                <td><?php $J1YIA3 = $J1MAXA3 - $J1MINA3; echo $J1YIA3;?></td>
                <td>3</td>
            </tr>
            <tr>
                <th>A4</th>
                <td><?php $J1MAXA4 = $J1VA4C1+$J1VA4C2+$J1VA4C5+$J1VA4C6; echo $J1MAXA4?></td>
                <td><?php $J1MINA4 = $J1VA4C3+$J1VA4C4; echo $J1MINA4;?></td>
                <td><?php $J1YIA4 = $J1MAXA4 - $J1MINA4; echo $J1YIA4;?></td>
                <td>5</td>
            </tr>
            <tr>
                <th>A5</th>
                <td><?php $J1MAXA5 = $J1VA5C1+$J1VA5C2+$J1VA5C5+$J1VA5C6; echo $J1MAXA5?></td>
                <td><?php $J1MINA5 = $J1VA5C3+$J1VA5C4; echo $J1MINA5;?></td>
                <td><?php $J1YIA5 = $J1MAXA5 - $J1MINA5; echo $J1YIA5;?></td>
                <td>1</td>
            </tr>
        </tbody>
    </table>
    <h5>Juri 2</h5>
    <table class="table">
        <thead>
            <tr>
                <th>Alternatif</th>
                <th>C1</th>
                <th>C2</th>
                <th>C3</th>
                <th>C4</th>
                <th>C5</th>
                <th>C6</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>A1</th>
                <td><?php $J2A1C1 = 1; echo $J2A1C1?></td>
                <td><?php $J2A1C2 = 1; echo $J2A1C2?></td>
                <td><?php $J2A1C3 = 4; echo $J2A1C3?></td>
                <td><?php $J2A1C4 = 4; echo $J2A1C4?></td>
                <td><?php $J2A1C5 = 1; echo $J2A1C5?></td>
                <td><?php $J2A1C6 = 4; echo $J2A1C6?></td>
            </tr>
            <tr>
                <th>A2</th>
                <td><?php $J2A2C1 = 1; echo $J2A2C1?></td>
                <td><?php $J2A2C2 = 1; echo $J2A2C2?></td>
                <td><?php $J2A2C3 = 3; echo $J2A2C3?></td>
                <td><?php $J2A2C4 = 3; echo $J2A2C4?></td>
                <td><?php $J2A2C5 = 1; echo $J2A2C5?></td>
                <td><?php $J2A2C6 = 4; echo $J2A2C6?></td>
            </tr>
            <tr>
                <th>A3</th>
                <td><?php $J2A3C1 = 1; echo $J2A3C1?></td>
                <td><?php $J2A3C2 = 1; echo $J2A3C2?></td>
                <td><?php $J2A3C3 = 4; echo $J2A3C3?></td>
                <td><?php $J2A3C4 = 4; echo $J2A3C4?></td>
                <td><?php $J2A3C5 = 1; echo $J2A3C5?></td>
                <td><?php $J2A3C6 = 3; echo $J2A3C6?></td>
            </tr>
            <tr>
                <th>A4</th>
                <td><?php $J2A4C1 = 1; echo $J2A4C1?></td>
                <td><?php $J2A4C2 = 1; echo $J2A4C2?></td>
                <td><?php $J2A4C3 = 4; echo $J2A4C3?></td>
                <td><?php $J2A4C4 = 2; echo $J2A4C4?></td>
                <td><?php $J2A4C5 = 0; echo $J2A4C5?></td>
                <td><?php $J2A4C6 = 4; echo $J2A4C6?></td>
            </tr>
            <tr>
                <th>A5</th>
                <td><?php $J2A5C1 = 1; echo $J2A5C1?></td>
                <td><?php $J2A5C2 = 1; echo $J2A5C2?></td>
                <td><?php $J2A5C3 = 3; echo $J2A5C3?></td>
                <td><?php $J2A5C4 = 4; echo $J2A5C4?></td>
                <td><?php $J2A5C5 = 1; echo $J2A5C5?></td>
                <td><?php $J2A5C6 = 3; echo $J2A5C6?></td>
            </tr>
        </tbody>
    </table>
    <h5>Matrix Normalisasi</h5>
    <table class="table">
        <thead>
            <tr>
                <th>A</th>
                <th>C1</th>
                <th>C2</th>
                <th>C3</th>
                <th>C4</th>
                <th>C5</th>
                <th>C6</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>A1</th>
                <td><?php $J2RA1C1 = $J2A1C1/sqrt(pow($J2A1C1,2)+pow($J2A2C1,2)+pow($J2A3C1,2)+pow($J2A4C1,2)+pow($J2A5C1,2)); echo $J2RA1C1;?></td>
                <td><?php $J2RA1C2 = $J2A1C2/sqrt(pow($J2A1C2,2)+pow($J2A2C2,2)+pow($J2A3C2,2)+pow($J2A4C2,2)+pow($J2A5C2,2)); echo $J2RA1C2;?></td>
                <td><?php $J2RA1C3 = $J2A1C3/sqrt(pow($J2A1C3,2)+pow($J2A2C3,2)+pow($J2A3C3,2)+pow($J2A4C3,2)+pow($J2A5C3,2)); echo $J2RA1C3;?></td>
                <td><?php $J2RA1C4 = $J2A1C4/sqrt(pow($J2A1C4,2)+pow($J2A2C4,2)+pow($J2A3C4,2)+pow($J2A4C4,2)+pow($J2A5C4,2)); echo $J2RA1C4;?></td>
                <td><?php $J2RA1C5 = $J2A1C5/sqrt(pow($J2A1C5,2)+pow($J2A2C5,2)+pow($J2A3C5,2)+pow($J2A4C5,2)+pow($J2A5C5,2)); echo $J2RA1C5;?></td>
                <td><?php $J2RA1C6 = $J2A1C6/sqrt(pow($J2A1C6,2)+pow($J2A2C6,2)+pow($J2A3C6,2)+pow($J2A4C6,2)+pow($J2A5C6,2)); echo $J2RA1C6;?></td>
            </tr>
            <tr>
                <th>A2</th>
                <td><?php $J2RA2C1 = $J2A2C1/sqrt(pow($J2A1C1,2)+pow($J2A2C1,2)+pow($J2A3C1,2)+pow($J2A4C1,2)+pow($J2A5C1,2)); echo $J2RA2C1;?></td>
                <td><?php $J2RA2C2 = $J2A2C2/sqrt(pow($J2A1C2,2)+pow($J2A2C2,2)+pow($J2A3C2,2)+pow($J2A4C2,2)+pow($J2A5C2,2)); echo $J2RA2C2;?></td>
                <td><?php $J2RA2C3 = $J2A2C3/sqrt(pow($J2A1C3,2)+pow($J2A2C3,2)+pow($J2A3C3,2)+pow($J2A4C3,2)+pow($J2A5C3,2)); echo $J2RA2C3;?></td>
                <td><?php $J2RA2C4 = $J2A2C4/sqrt(pow($J2A1C4,2)+pow($J2A2C4,2)+pow($J2A3C4,2)+pow($J2A4C4,2)+pow($J2A5C4,2)); echo $J2RA2C4;?></td>
                <td><?php $J2RA2C5 = $J2A2C5/sqrt(pow($J2A1C5,2)+pow($J2A2C5,2)+pow($J2A3C5,2)+pow($J2A4C5,2)+pow($J2A5C5,2)); echo $J2RA2C5;?></td>
                <td><?php $J2RA2C6 = $J2A2C6/sqrt(pow($J2A1C6,2)+pow($J2A2C6,2)+pow($J2A3C6,2)+pow($J2A4C6,2)+pow($J2A5C6,2)); echo $J2RA2C6;?></td>
            </tr>
            <tr>
                <th>A3</th>
                <td><?php $J2RA3C1 = $J2A3C1/sqrt(pow($J2A1C1,2)+pow($J2A2C1,2)+pow($J2A3C1,2)+pow($J2A4C1,2)+pow($J2A5C1,2)); echo $J2RA3C1;?></td>
                <td><?php $J2RA3C2 = $J2A3C2/sqrt(pow($J2A1C2,2)+pow($J2A2C2,2)+pow($J2A3C2,2)+pow($J2A4C2,2)+pow($J2A5C2,2)); echo $J2RA3C2;?></td>
                <td><?php $J2RA3C3 = $J2A3C3/sqrt(pow($J2A1C3,2)+pow($J2A2C3,2)+pow($J2A3C3,2)+pow($J2A4C3,2)+pow($J2A5C3,2)); echo $J2RA3C3;?></td>
                <td><?php $J2RA3C4 = $J2A3C4/sqrt(pow($J2A1C4,2)+pow($J2A2C4,2)+pow($J2A3C4,2)+pow($J2A4C4,2)+pow($J2A5C4,2)); echo $J2RA3C4;?></td>
                <td><?php $J2RA3C5 = $J2A3C5/sqrt(pow($J2A1C5,2)+pow($J2A2C5,2)+pow($J2A3C5,2)+pow($J2A4C5,2)+pow($J2A5C5,2)); echo $J2RA3C5;?></td>
                <td><?php $J2RA3C6 = $J2A3C6/sqrt(pow($J2A1C6,2)+pow($J2A2C6,2)+pow($J2A3C6,2)+pow($J2A4C6,2)+pow($J2A5C6,2)); echo $J2RA3C6;?></td>
            </tr>
            <tr>
                <th>A4</th>
                <td><?php $J2RA4C1 = $J2A4C1/sqrt(pow($J2A1C1,2)+pow($J2A2C1,2)+pow($J2A3C1,2)+pow($J2A4C1,2)+pow($J2A5C1,2)); echo $J2RA4C1;?></td>
                <td><?php $J2RA4C2 = $J2A4C2/sqrt(pow($J2A1C2,2)+pow($J2A2C2,2)+pow($J2A3C2,2)+pow($J2A4C2,2)+pow($J2A5C2,2)); echo $J2RA4C2;?></td>
                <td><?php $J2RA4C3 = $J2A4C3/sqrt(pow($J2A1C3,2)+pow($J2A2C3,2)+pow($J2A3C3,2)+pow($J2A4C3,2)+pow($J2A5C3,2)); echo $J2RA4C3;?></td>
                <td><?php $J2RA4C4 = $J2A4C4/sqrt(pow($J2A1C4,2)+pow($J2A2C4,2)+pow($J2A3C4,2)+pow($J2A4C4,2)+pow($J2A5C4,2)); echo $J2RA4C4;?></td>
                <td><?php $J2RA4C5 = $J2A4C5/sqrt(pow($J2A1C5,2)+pow($J2A2C5,2)+pow($J2A3C5,2)+pow($J2A4C5,2)+pow($J2A5C5,2)); echo $J2RA4C5;?></td>
                <td><?php $J2RA4C6 = $J2A4C6/sqrt(pow($J2A1C6,2)+pow($J2A2C6,2)+pow($J2A3C6,2)+pow($J2A4C6,2)+pow($J2A5C6,2)); echo $J2RA4C6;?></td>
            </tr>
            <tr>
                <th>A5</th>
                <td><?php $J2RA5C1 = $J2A5C1/sqrt(pow($J2A1C1,2)+pow($J2A2C1,2)+pow($J2A3C1,2)+pow($J2A4C1,2)+pow($J2A5C1,2)); echo $J2RA5C1;?></td>
                <td><?php $J2RA5C2 = $J2A5C2/sqrt(pow($J2A1C2,2)+pow($J2A2C2,2)+pow($J2A3C2,2)+pow($J2A4C2,2)+pow($J2A5C2,2)); echo $J2RA5C2;?></td>
                <td><?php $J2RA5C3 = $J2A5C3/sqrt(pow($J2A1C3,2)+pow($J2A2C3,2)+pow($J2A3C3,2)+pow($J2A4C3,2)+pow($J2A5C3,2)); echo $J2RA5C3;?></td>
                <td><?php $J2RA5C4 = $J2A5C4/sqrt(pow($J2A1C4,2)+pow($J2A2C4,2)+pow($J2A3C4,2)+pow($J2A4C4,2)+pow($J2A5C4,2)); echo $J2RA5C4;?></td>
                <td><?php $J2RA5C5 = $J2A5C5/sqrt(pow($J2A1C5,2)+pow($J2A2C5,2)+pow($J2A3C5,2)+pow($J2A4C5,2)+pow($J2A5C5,2)); echo $J2RA5C5;?></td>
                <td><?php $J2RA5C6 = $J2A5C6/sqrt(pow($J2A1C6,2)+pow($J2A2C6,2)+pow($J2A3C6,2)+pow($J2A4C6,2)+pow($J2A5C6,2)); echo $J2RA5C6;?></td>
            </tr>
        </tbody>
    </table>
    <h5>Matrix Normalisasi Berbobot</h5>
    <table class="table">
        <thead>
            <tr>
                <th>V</th><th>C1</th><th>C2</th><th>C4</th><th>C5</th><th>C6</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>A1</th>
                <td><?php $J2VA1C1 = $J2RA1C1 * $BC1; echo $J2VA1C1?></td>
                <td><?php $J2VA1C2 = $J2RA1C2 * $BC2; echo $J2VA1C2?></td>
                <td><?php $J2VA1C3 = $J2RA1C3 * $BC3; echo $J2VA1C3?></td>
                <td><?php $J2VA1C4 = $J2RA1C4 * $BC4; echo $J2VA1C4?></td>
                <td><?php $J2VA1C5 = $J2RA1C5 * $BC5; echo $J2VA1C5?></td>
                <td><?php $J2VA1C6 = $J2RA1C6 * $BC6; echo $J2VA1C6?></td>
            </tr>
            <tr>
                <th>A2</th>
                <td><?php $J2VA2C1 = $J2RA2C1 * $BC1; echo $J2VA2C1?></td>
                <td><?php $J2VA2C2 = $J2RA2C2 * $BC2; echo $J2VA2C2?></td>
                <td><?php $J2VA2C3 = $J2RA2C3 * $BC3; echo $J2VA2C3?></td>
                <td><?php $J2VA2C4 = $J2RA2C4 * $BC4; echo $J2VA2C4?></td>
                <td><?php $J2VA2C5 = $J2RA2C5 * $BC5; echo $J2VA2C5?></td>
                <td><?php $J2VA2C6 = $J2RA2C6 * $BC6; echo $J2VA2C6?></td>
            </tr>
            <tr>
                <th>A3</th>
                <td><?php $J2VA3C1 = $J2RA3C1 * $BC1; echo $J2VA3C1?></td>
                <td><?php $J2VA3C2 = $J2RA3C2 * $BC2; echo $J2VA3C2?></td>
                <td><?php $J2VA3C3 = $J2RA3C3 * $BC3; echo $J2VA3C3?></td>
                <td><?php $J2VA3C4 = $J2RA3C4 * $BC4; echo $J2VA3C4?></td>
                <td><?php $J2VA3C5 = $J2RA3C5 * $BC5; echo $J2VA3C5?></td>
                <td><?php $J2VA3C6 = $J2RA3C6 * $BC6; echo $J2VA3C6?></td>
            </tr>
            <tr>
                <th>A4</th>
                <td><?php $J2VA4C1 = $J2RA4C1 * $BC1; echo $J2VA4C1?></td>
                <td><?php $J2VA4C2 = $J2RA4C2 * $BC2; echo $J2VA4C2?></td>
                <td><?php $J2VA4C3 = $J2RA4C3 * $BC3; echo $J2VA4C3?></td>
                <td><?php $J2VA4C4 = $J2RA4C4 * $BC4; echo $J2VA4C4?></td>
                <td><?php $J2VA4C5 = $J2RA4C5 * $BC5; echo $J2VA4C5?></td>
                <td><?php $J2VA4C6 = $J2RA4C6 * $BC6; echo $J2VA4C6?></td>
            </tr>
            <tr>
                <th>A5</th>
                <td><?php $J2VA5C1 = $J2RA5C1 * $BC1; echo $J2VA5C1?></td>
                <td><?php $J2VA5C2 = $J2RA5C2 * $BC2; echo $J2VA5C2?></td>
                <td><?php $J2VA5C3 = $J2RA5C3 * $BC3; echo $J2VA5C3?></td>
                <td><?php $J2VA5C4 = $J2RA5C4 * $BC4; echo $J2VA5C4?></td>
                <td><?php $J2VA5C5 = $J2RA5C5 * $BC5; echo $J2VA5C5?></td>
                <td><?php $J2VA5C6 = $J2RA5C6 * $BC6; echo $J2VA5C6?></td>
            </tr>
        </tbody>
    </table>
    <h5>Nilai Ranking</h5>
    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th>MAX</th>
                <th>MIN</th>
                <th>Yi</th>
                <th>Rank</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>A1</th>
                <td><?php $J2MAXA1 = $J2VA1C1+$J2VA1C2+$J2VA1C5+$J2VA1C6; echo $J2MAXA1?></td>
                <td><?php $J2MINA1 = $J2VA1C3+$J2VA1C4; echo $J2MINA1;?></td>
                <td><?php $J2YIA1 = $J2MAXA1 - $J2MINA1; echo $J2YIA1;?></td>
                <td>3</td>
            </tr>
            <tr>
                <th>A2</th>
                <td><?php $J2MAXA2 = $J2VA2C1+$J2VA2C2+$J2VA2C5+$J2VA2C6; echo $J2MAXA2?></td>
                <td><?php $J2MINA2 = $J2VA2C3+$J2VA2C4; echo $J2MINA2;?></td>
                <td><?php $J2YIA2 = $J2MAXA2 - $J2MINA2; echo $J2YIA2;?></td>
                <td>1</td>
            </tr>
            <tr>
                <th>A3</th>
                <td><?php $J2MAXA3 = $J2VA3C1+$J2VA3C2+$J2VA3C5+$J2VA3C6; echo $J2MAXA3?></td>
                <td><?php $J2MINA3 = $J2VA3C3+$J2VA3C4; echo $J2MINA3;?></td>
                <td><?php $J2YIA3 = $J2MAXA3 - $J2MINA3; echo $J2YIA3;?></td>
                <td>5</td>
            </tr>
            <tr>
                <th>A4</th>
                <td><?php $J2MAXA4 = $J2VA4C1+$J2VA4C2+$J2VA4C5+$J2VA4C6; echo $J2MAXA4?></td>
                <td><?php $J2MINA4 = $J2VA4C3+$J2VA4C4; echo $J2MINA4;?></td>
                <td><?php $J2YIA4 = $J2MAXA4 - $J2MINA4; echo $J2YIA4;?></td>
                <td>2</td>
            </tr>
            <tr>
                <th>A5</th>
                <td><?php $J2MAXA5 = $J2VA5C1+$J2VA5C2+$J2VA5C5+$J2VA5C6; echo $J2MAXA5?></td>
                <td><?php $J2MINA5 = $J2VA5C3+$J2VA5C4; echo $J2MINA5;?></td>
                <td><?php $J2YIA5 = $J2MAXA5 - $J2MINA5; echo $J2YIA5;?></td>
                <td>4</td>
            </tr>
        </tbody>
    </table>
    <h5>Juri 3</h5>
    <table class="table">
        <thead>
            <tr>
                <th>Alternatif</th>
                <th>C1</th>
                <th>C2</th>
                <th>C3</th>
                <th>C4</th>
                <th>C5</th>
                <th>C6</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>A1</th>
                <td><?php $J3A1C1 = 1; echo $J3A1C1?></td>
                <td><?php $J3A1C2 = 1; echo $J3A1C2?></td>
                <td><?php $J3A1C3 = 3; echo $J3A1C3?></td>
                <td><?php $J3A1C4 = 3; echo $J3A1C4?></td>
                <td><?php $J3A1C5 = 1; echo $J3A1C5?></td>
                <td><?php $J3A1C6 = 3; echo $J3A1C6?></td>
            </tr>
            <tr>
                <th>A2</th>
                <td><?php $J3A2C1 = 1; echo $J3A2C1?></td>
                <td><?php $J3A2C2 = 1; echo $J3A2C2?></td>
                <td><?php $J3A2C3 = 4; echo $J3A2C3?></td>
                <td><?php $J3A2C4 = 3; echo $J3A2C4?></td>
                <td><?php $J3A2C5 = 1; echo $J3A2C5?></td>
                <td><?php $J3A2C6 = 4; echo $J3A2C6?></td>
            </tr>
            <tr>
                <th>A3</th>
                <td><?php $J3A3C1 = 1; echo $J3A3C1?></td>
                <td><?php $J3A3C2 = 1; echo $J3A3C2?></td>
                <td><?php $J3A3C3 = 3; echo $J3A3C3?></td>
                <td><?php $J3A3C4 = 4; echo $J3A3C4?></td>
                <td><?php $J3A3C5 = 1; echo $J3A3C5?></td>
                <td><?php $J3A3C6 = 3; echo $J3A3C6?></td>
            </tr>
            <tr>
                <th>A4</th>
                <td><?php $J3A4C1 = 1; echo $J3A4C1?></td>
                <td><?php $J3A4C2 = 1; echo $J3A4C2?></td>
                <td><?php $J3A4C3 = 4; echo $J3A4C3?></td>
                <td><?php $J3A4C4 = 4; echo $J3A4C4?></td>
                <td><?php $J3A4C5 = 1; echo $J3A4C5?></td>
                <td><?php $J3A4C6 = 3; echo $J3A4C6?></td>
            </tr>
            <tr>
                <th>A5</th>
                <td><?php $J3A5C1 = 1; echo $J3A5C1?></td>
                <td><?php $J3A5C2 = 1; echo $J3A5C2?></td>
                <td><?php $J3A5C3 = 4; echo $J3A5C3?></td>
                <td><?php $J3A5C4 = 3; echo $J3A5C4?></td>
                <td><?php $J3A5C5 = 0; echo $J3A5C5?></td>
                <td><?php $J3A5C6 = 4; echo $J3A5C6?></td>
            </tr>
        </tbody>
    </table>
    <h5>Matrix Normalisasi</h5>
    <table class="table">
        <thead>
            <tr>
                <th>A</th>
                <th>C1</th>
                <th>C2</th>
                <th>C3</th>
                <th>C4</th>
                <th>C5</th>
                <th>C6</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>A1</th>
                <td><?php $J3RA1C1 = $J3A1C1/sqrt(pow($J3A1C1,2)+pow($J3A2C1,2)+pow($J3A3C1,2)+pow($J3A4C1,2)+pow($J3A5C1,2)); echo $J3RA1C1;?></td>
                <td><?php $J3RA1C2 = $J3A1C2/sqrt(pow($J3A1C2,2)+pow($J3A2C2,2)+pow($J3A3C2,2)+pow($J3A4C2,2)+pow($J3A5C2,2)); echo $J3RA1C2;?></td>
                <td><?php $J3RA1C3 = $J3A1C3/sqrt(pow($J3A1C3,2)+pow($J3A2C3,2)+pow($J3A3C3,2)+pow($J3A4C3,2)+pow($J3A5C3,2)); echo $J3RA1C3;?></td>
                <td><?php $J3RA1C4 = $J3A1C4/sqrt(pow($J3A1C4,2)+pow($J3A2C4,2)+pow($J3A3C4,2)+pow($J3A4C4,2)+pow($J3A5C4,2)); echo $J3RA1C4;?></td>
                <td><?php $J3RA1C5 = $J3A1C5/sqrt(pow($J3A1C5,2)+pow($J3A2C5,2)+pow($J3A3C5,2)+pow($J3A4C5,2)+pow($J3A5C5,2)); echo $J3RA1C5;?></td>
                <td><?php $J3RA1C6 = $J3A1C6/sqrt(pow($J3A1C6,2)+pow($J3A2C6,2)+pow($J3A3C6,2)+pow($J3A4C6,2)+pow($J3A5C6,2)); echo $J3RA1C6;?></td>
            </tr>
            <tr>
                <th>A2</th>
                <td><?php $J3RA2C1 = $J3A2C1/sqrt(pow($J3A1C1,2)+pow($J3A2C1,2)+pow($J3A3C1,2)+pow($J3A4C1,2)+pow($J3A5C1,2)); echo $J3RA2C1;?></td>
                <td><?php $J3RA2C2 = $J3A2C2/sqrt(pow($J3A1C2,2)+pow($J3A2C2,2)+pow($J3A3C2,2)+pow($J3A4C2,2)+pow($J3A5C2,2)); echo $J3RA2C2;?></td>
                <td><?php $J3RA2C3 = $J3A2C3/sqrt(pow($J3A1C3,2)+pow($J3A2C3,2)+pow($J3A3C3,2)+pow($J3A4C3,2)+pow($J3A5C3,2)); echo $J3RA2C3;?></td>
                <td><?php $J3RA2C4 = $J3A2C4/sqrt(pow($J3A1C4,2)+pow($J3A2C4,2)+pow($J3A3C4,2)+pow($J3A4C4,2)+pow($J3A5C4,2)); echo $J3RA2C4;?></td>
                <td><?php $J3RA2C5 = $J3A2C5/sqrt(pow($J3A1C5,2)+pow($J3A2C5,2)+pow($J3A3C5,2)+pow($J3A4C5,2)+pow($J3A5C5,2)); echo $J3RA2C5;?></td>
                <td><?php $J3RA2C6 = $J3A2C6/sqrt(pow($J3A1C6,2)+pow($J3A2C6,2)+pow($J3A3C6,2)+pow($J3A4C6,2)+pow($J3A5C6,2)); echo $J3RA2C6;?></td>
            </tr>
            <tr>
                <th>A3</th>
                <td><?php $J3RA3C1 = $J3A3C1/sqrt(pow($J3A1C1,2)+pow($J3A2C1,2)+pow($J3A3C1,2)+pow($J3A4C1,2)+pow($J3A5C1,2)); echo $J3RA3C1;?></td>
                <td><?php $J3RA3C2 = $J3A3C2/sqrt(pow($J3A1C2,2)+pow($J3A2C2,2)+pow($J3A3C2,2)+pow($J3A4C2,2)+pow($J3A5C2,2)); echo $J3RA3C2;?></td>
                <td><?php $J3RA3C3 = $J3A3C3/sqrt(pow($J3A1C3,2)+pow($J3A2C3,2)+pow($J3A3C3,2)+pow($J3A4C3,2)+pow($J3A5C3,2)); echo $J3RA3C3;?></td>
                <td><?php $J3RA3C4 = $J3A3C4/sqrt(pow($J3A1C4,2)+pow($J3A2C4,2)+pow($J3A3C4,2)+pow($J3A4C4,2)+pow($J3A5C4,2)); echo $J3RA3C4;?></td>
                <td><?php $J3RA3C5 = $J3A3C5/sqrt(pow($J3A1C5,2)+pow($J3A2C5,2)+pow($J3A3C5,2)+pow($J3A4C5,2)+pow($J3A5C5,2)); echo $J3RA3C5;?></td>
                <td><?php $J3RA3C6 = $J3A3C6/sqrt(pow($J3A1C6,2)+pow($J3A2C6,2)+pow($J3A3C6,2)+pow($J3A4C6,2)+pow($J3A5C6,2)); echo $J3RA3C6;?></td>
            </tr>
            <tr>
                <th>A4</th>
                <td><?php $J3RA4C1 = $J3A4C1/sqrt(pow($J3A1C1,2)+pow($J3A2C1,2)+pow($J3A3C1,2)+pow($J3A4C1,2)+pow($J3A5C1,2)); echo $J3RA4C1;?></td>
                <td><?php $J3RA4C2 = $J3A4C2/sqrt(pow($J3A1C2,2)+pow($J3A2C2,2)+pow($J3A3C2,2)+pow($J3A4C2,2)+pow($J3A5C2,2)); echo $J3RA4C2;?></td>
                <td><?php $J3RA4C3 = $J3A4C3/sqrt(pow($J3A1C3,2)+pow($J3A2C3,2)+pow($J3A3C3,2)+pow($J3A4C3,2)+pow($J3A5C3,2)); echo $J3RA4C3;?></td>
                <td><?php $J3RA4C4 = $J3A4C4/sqrt(pow($J3A1C4,2)+pow($J3A2C4,2)+pow($J3A3C4,2)+pow($J3A4C4,2)+pow($J3A5C4,2)); echo $J3RA4C4;?></td>
                <td><?php $J3RA4C5 = $J3A4C5/sqrt(pow($J3A1C5,2)+pow($J3A2C5,2)+pow($J3A3C5,2)+pow($J3A4C5,2)+pow($J3A5C5,2)); echo $J3RA4C5;?></td>
                <td><?php $J3RA4C6 = $J3A4C6/sqrt(pow($J3A1C6,2)+pow($J3A2C6,2)+pow($J3A3C6,2)+pow($J3A4C6,2)+pow($J3A5C6,2)); echo $J3RA4C6;?></td>
            </tr>
            <tr>
                <th>A5</th>
                <td><?php $J3RA5C1 = $J3A5C1/sqrt(pow($J3A1C1,2)+pow($J3A2C1,2)+pow($J3A3C1,2)+pow($J3A4C1,2)+pow($J3A5C1,2)); echo $J3RA5C1;?></td>
                <td><?php $J3RA5C2 = $J3A5C2/sqrt(pow($J3A1C2,2)+pow($J3A2C2,2)+pow($J3A3C2,2)+pow($J3A4C2,2)+pow($J3A5C2,2)); echo $J3RA5C2;?></td>
                <td><?php $J3RA5C3 = $J3A5C3/sqrt(pow($J3A1C3,2)+pow($J3A2C3,2)+pow($J3A3C3,2)+pow($J3A4C3,2)+pow($J3A5C3,2)); echo $J3RA5C3;?></td>
                <td><?php $J3RA5C4 = $J3A5C4/sqrt(pow($J3A1C4,2)+pow($J3A2C4,2)+pow($J3A3C4,2)+pow($J3A4C4,2)+pow($J3A5C4,2)); echo $J3RA5C4;?></td>
                <td><?php $J3RA5C5 = $J3A5C5/sqrt(pow($J3A1C5,2)+pow($J3A2C5,2)+pow($J3A3C5,2)+pow($J3A4C5,2)+pow($J3A5C5,2)); echo $J3RA5C5;?></td>
                <td><?php $J3RA5C6 = $J3A5C6/sqrt(pow($J3A1C6,2)+pow($J3A2C6,2)+pow($J3A3C6,2)+pow($J3A4C6,2)+pow($J3A5C6,2)); echo $J3RA5C6;?></td>
            </tr>
        </tbody>
    </table>
    <h5>Matrix Normalisasi Berbobot</h5>
    <table class="table">
        <thead>
            <tr>
                <th>V</th><th>C1</th><th>C2</th><th>C4</th><th>C5</th><th>C6</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>A1</th>
                <td><?php $J3VA1C1 = $J3RA1C1 * $BC1; echo $J3VA1C1?></td>
                <td><?php $J3VA1C2 = $J3RA1C2 * $BC2; echo $J3VA1C2?></td>
                <td><?php $J3VA1C3 = $J3RA1C3 * $BC3; echo $J3VA1C3?></td>
                <td><?php $J3VA1C4 = $J3RA1C4 * $BC4; echo $J3VA1C4?></td>
                <td><?php $J3VA1C5 = $J3RA1C5 * $BC5; echo $J3VA1C5?></td>
                <td><?php $J3VA1C6 = $J3RA1C6 * $BC6; echo $J3VA1C6?></td>
            </tr>
            <tr>
                <th>A2</th>
                <td><?php $J3VA2C1 = $J3RA2C1 * $BC1; echo $J3VA2C1?></td>
                <td><?php $J3VA2C2 = $J3RA2C2 * $BC2; echo $J3VA2C2?></td>
                <td><?php $J3VA2C3 = $J3RA2C3 * $BC3; echo $J3VA2C3?></td>
                <td><?php $J3VA2C4 = $J3RA2C4 * $BC4; echo $J3VA2C4?></td>
                <td><?php $J3VA2C5 = $J3RA2C5 * $BC5; echo $J3VA2C5?></td>
                <td><?php $J3VA2C6 = $J3RA2C6 * $BC6; echo $J3VA2C6?></td>
            </tr>
            <tr>
                <th>A3</th>
                <td><?php $J3VA3C1 = $J3RA3C1 * $BC1; echo $J3VA3C1?></td>
                <td><?php $J3VA3C2 = $J3RA3C2 * $BC2; echo $J3VA3C2?></td>
                <td><?php $J3VA3C3 = $J3RA3C3 * $BC3; echo $J3VA3C3?></td>
                <td><?php $J3VA3C4 = $J3RA3C4 * $BC4; echo $J3VA3C4?></td>
                <td><?php $J3VA3C5 = $J3RA3C5 * $BC5; echo $J3VA3C5?></td>
                <td><?php $J3VA3C6 = $J3RA3C6 * $BC6; echo $J3VA3C6?></td>
            </tr>
            <tr>
                <th>A4</th>
                <td><?php $J3VA4C1 = $J3RA4C1 * $BC1; echo $J3VA4C1?></td>
                <td><?php $J3VA4C2 = $J3RA4C2 * $BC2; echo $J3VA4C2?></td>
                <td><?php $J3VA4C3 = $J3RA4C3 * $BC3; echo $J3VA4C3?></td>
                <td><?php $J3VA4C4 = $J3RA4C4 * $BC4; echo $J3VA4C4?></td>
                <td><?php $J3VA4C5 = $J3RA4C5 * $BC5; echo $J3VA4C5?></td>
                <td><?php $J3VA4C6 = $J3RA4C6 * $BC6; echo $J3VA4C6?></td>
            </tr>
            <tr>
                <th>A5</th>
                <td><?php $J3VA5C1 = $J3RA5C1 * $BC1; echo $J3VA5C1?></td>
                <td><?php $J3VA5C2 = $J3RA5C2 * $BC2; echo $J3VA5C2?></td>
                <td><?php $J3VA5C3 = $J3RA5C3 * $BC3; echo $J3VA5C3?></td>
                <td><?php $J3VA5C4 = $J3RA5C4 * $BC4; echo $J3VA5C4?></td>
                <td><?php $J3VA5C5 = $J3RA5C5 * $BC5; echo $J3VA5C5?></td>
                <td><?php $J3VA5C6 = $J3RA5C6 * $BC6; echo $J3VA5C6?></td>
            </tr>
        </tbody>
    </table>
    <h5>Nilai Ranking</h5>
    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th>MAX</th>
                <th>MIN</th>
                <th>Yi</th>
                <th>Rank</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>A1</th>
                <td><?php $J3MAXA1 = $J3VA1C1+$J3VA1C2+$J3VA1C5+$J3VA1C6; echo $J3MAXA1?></td>
                <td><?php $J3MINA1 = $J3VA1C3+$J3VA1C4; echo $J3MINA1;?></td>
                <td><?php $J3YIA1 = $J3MAXA1 - $J3MINA1; echo $J3YIA1;?></td>
                <td>2</td>
            </tr>
            <tr>
                <th>A2</th>
                <td><?php $J3MAXA2 = $J3VA2C1+$J3VA2C2+$J3VA2C5+$J3VA2C6; echo $J3MAXA2?></td>
                <td><?php $J3MINA2 = $J3VA2C3+$J3VA2C4; echo $J3MINA2;?></td>
                <td><?php $J3YIA2 = $J3MAXA2 - $J3MINA2; echo $J3YIA2;?></td>
                <td>1</td>
            </tr>
            <tr>
                <th>A3</th>
                <td><?php $J3MAXA3 = $J3VA3C1+$J3VA3C2+$J3VA3C5+$J3VA3C6; echo $J3MAXA3?></td>
                <td><?php $J3MINA3 = $J3VA3C3+$J3VA3C4; echo $J3MINA3;?></td>
                <td><?php $J3YIA3 = $J3MAXA3 - $J3MINA3; echo $J3YIA3;?></td>
                <td>3</td>
            </tr>
            <tr>
                <th>A4</th>
                <td><?php $J3MAXA4 = $J3VA4C1+$J3VA4C2+$J3VA4C5+$J3VA4C6; echo $J3MAXA4?></td>
                <td><?php $J3MINA4 = $J3VA4C3+$J3VA4C4; echo $J3MINA4;?></td>
                <td><?php $J3YIA4 = $J3MAXA4 - $J3MINA4; echo $J3YIA4;?></td>
                <td>5</td>
            </tr>
            <tr>
                <th>A5</th>
                <td><?php $J3MAXA5 = $J3VA5C1+$J3VA5C2+$J3VA5C5+$J3VA5C6; echo $J3MAXA5?></td>
                <td><?php $J3MINA5 = $J3VA5C3+$J3VA5C4; echo $J3MINA5;?></td>
                <td><?php $J3YIA5 = $J3MAXA5 - $J3MINA5; echo $J3YIA5;?></td>
                <td>4</td>
            </tr>
        </tbody>
    </table>
    <hr>
    <h4>Ranking Borda</h4>
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th></th><th></th><th></th><th>Rank</th><th></th><th></th><th></th><th></th><th></th>
            </tr>
            <tr>
                <th>A</th><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>Poin Borda</th><th>Nilai Borda</th><th>Rank</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>A1</th>
                <td>0</td>
                <td>1,829833139</td>
                <td>0,65918</td>
                <td>0</td>
                <td>0</td>
                <td>2,489021191</td>
                <td>0,244102308</td>
                <th>2</th>
            </tr>
            <tr>
                <th>A2</th>
                <td>2,484447916</td>
                <td>0</td>
                <td>0</td>
                <td>0,423463</td>
                <td>0</td>
                <td>2,907910542</td>
                <td>0,28518346</td>
                <th>1</th>
            </tr>
            <tr>
                <th>A3</th>
                <td>0</td>
                <td>0</td>
                <td>1,273561</td>
                <td>0</td>
                <td>0,194619</td>
                <td>1,468180157</td>
                <td>0,143986788</td>
                <th>4</th>
            </tr>
            <tr>
                <th>A4</th>
                <td>0</td>
                <td>0,884853198</td>
                <td>0</td>
                <td>0</td>
                <td>0,381146</td>
                <td>1,265999493</td>
                <td>0,124158605</td>
                <th>5</th>
            </tr>
            <tr>
                <th>A5</th>
                <td>1,24344584</td>
                <td>0</td>
                <td>0</td>
                <td>0,822074</td>
                <td>0</td>
                <td>2,065519729</td>
                <td>0,202568839</td>
                <th>3</th>
            </tr>
            <tr>
                <th>Bobot Borda</th>
                <td>5</td>
                <td>4</td>
                <td>3</td>
                <td>2</td>
                <td>1</td>
                <td>10,19663111</td>
            </tr>
        </tbody>
    </table>
    <h5>Jadi alternatif yang dipilih adalah A2 dengan nilai borda tertinggi</h5>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>