<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Настройки</title>
</head>
<?php
$img = array('36.6', 'aeroflot', 'ALROSA', 'gazprom', 'head_hunter', 'lukoil', 'magnit', 'mts', 'norilnik', 'rosneft', 'Sbrebank', 'severstal', 'tatneft', 'vtb', 'yandex');
$name_company = array('36.6', 'Аэрофлот', 'Алроса', 'Газпром', 'Head_Hunter', 'Лукойл', 'Магнит', 'МТС', 'Норникель', 'Роснефть', 'Сбербанк', 'СЕВЕРСТАЛЬ', 'ТАТНЕФТЬ', 'ВТБ', 'Яндекс');
?>
<body>
<?php include 'header.php'; ?>

<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Действие
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Действие</a></li>
    <li><a class="dropdown-item" href="#">Другое действие</a></li>
    <li><a class="dropdown-item" href="#">Что-то еще здесь</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Отделенная ссылка</a></li>
  </ul>
</div>

    <!-- <div class="container text-center">
        <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
            <?php for ($i=0; $i !=count($img);$i++): ?>
            <div class="card" style="width:150px" ">
                <img src="img/<?php echo $img[$i]; ?>.png" class="card-img-top" alt="..." width="200px" height="100px">
                <div class="card-body">
                    <p class="card-text"><?php echo $name_company[$i]; ?></p>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div> -->
    
</body>
</html>