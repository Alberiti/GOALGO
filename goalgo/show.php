<!DOCTYPE html>
<?php
error_reporting(E_ALL & ~E_NOTICE);
$ticker = array('APTK', 'AFLT', 'ALRS', 'GAZP', 'HHRU', 'LKOH', 'MGNT', 'MTSS', 'GMKN', 'ROSN', 'SBER', 'CHMF', 'TATN', 'VTBR', 'YNDX');
$date = date('Y-m-d');
$data_to_send = $date. ",". $ticker[$_POST['catio']];

$python_script = "albert.py"; 
$command= "python " . escapeshellarg($python_script) . " " . escapeshellarg($data_to_send);

$output = shell_exec($command);
$output = json_decode($output);

?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <title>Изменение акций</title>
</head>
<style>
    h1{
        text-align: center;
    }
    a{
        text-align: center;
    }
</style>
<?php 
error_reporting(E_ALL & ~E_NOTICE);
    $name = array('36.6', 'Аэрофлот', 'Алроса', 'Газпром', 'Head_Hunter', 'Лукойл', 'Магнит', 'МТС', 'Норникель', 'Роснефть', 'Сбербанк', 'СЕВЕРСТАЛЬ', 'ТАТНЕФТЬ', 'ВТБ', 'Яндекс');

    $name_action = $_POST["catio"];
    $time = (int)$_POST["time"][1];
?>
<style>
    a{
        text-decoration:none;
    }
</style>
<body>
    
<?php include 'header.php'; ?>
    <h1>Изменения по акциям компании "<?php echo $name[$name_action]; ?>"<br> За последние 14 рабочих дня</h1>
    </p>
    <table class="table">
    <thead>
    <tr>
      <th scope="col">Дата</th>
      <th scope="col">Наивысшая цена</th>
      <th scope="col">Время</th>
      <th scope="col">Объём заявок в этот момент</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        $count = intval($output->l0);
        $j=1;
        for ($i=0; $i != 14; $i++): ?>
        <tr>
        <td><?php $string = 'l'.$j; echo $output->$string; $j++; ?></td>
        <td><?php $string = 'l'.$j; echo $output->$string; $j++; ?></td>
        <td><?php $string = 'l'.$j; echo $output->$string; $j++; ?></td>
        <td><?php $string = 'l'.$j; echo $output->$string; $j++; ?></td>
        </tr>
    <?php endfor; ?>
  </tbody>
</table> 
    
    <br><br>

    
    <br>
    <a href ="#">Отправить запрос на покупку<a>

    
    </p>
</body>
</html>