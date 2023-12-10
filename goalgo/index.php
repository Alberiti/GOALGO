<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Go Algo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<?php
$img = array('36.6', 'aeroflot', 'ALROSA', 'gazprom', 'head_hunter', 'lukoil', 'magnit', 'mts', 'norilnik', 'rosneft', 'Sbrebank', 'severstal', 'tatneft', 'vtb', 'yandex');
$name_company = array('36.6', 'Аэрофлот', 'Алроса', 'Газпром', 'Head_Hunter', 'Лукойл', 'Магнит', 'МТС', 'Норникель', 'Роснефть', 'Сбербанк', 'СЕВЕРСТАЛЬ', 'ТАТНЕФТЬ', 'ВТБ', 'Яндекс');
?>
<style>
    h1{
        text-align: center;
    }
    h3{
        margin-top: 150px;
        text-align: center;
    }
    .list-card{
        margin-top: 100px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }
    .card{
        margin-left: 20px;
        margin-bottom: 20px;
        margin-right: 20px;
        text-align: center;
        width: 200px;
        height: 125px;
        border: 2px solid black;
        align-items: center;
        overflow: hidden;
    }
    .img{
        width: 200px;
       height: 85px;
    }
</style>
<body>
<?php include 'header.php'; ?>
    <h1>Выберите акции информация по которым вас интересует</h1>
    <h3>Нажмите кнопку посмотреть, чтобы увидеть основную информацию за последние 2 недели</h3>
    <div class = "list-card">
        <?php 
        for ($i=0; $i !=count($img); $i++): ?>
        <div class="card">
            <div class="img">
                <img src="img/<?php echo $img[$i];?>.png" width="196px" height="100%" alt="">
            </div>
            <?php echo $name[$i]; ?>
            <form action="show.php" method="post">
                
                <input type="hidden" name="catio" value="<?php echo $i;?>" >
                <!-- <select name="time">
                    <option>10:00 - 11:00</option>
                    <option>11:00 - 12:00</option>
                    <option>12:00 - 13:00</option>
                    <option>13:00 - 14:00</option>
                    <option>14:00 - 15:00</option>
                    <option>15:00 - 16:00</option>
                    <option>16:00 - 17:00</option>
                    <option>17:00 - 18:00</option>
                </select> -->
                <input class="btn btn-success" style="position: absolute; bottom: 0px; right: 35px;" type="submit" value="Посмотреть"/>
            </form>

        </div>
        <?php endfor;?>
        
    </div>

    <h3>После выбора компании и просмотра информации, вы сможете вернуться на Главную страницу и выбрать другую компанию</h3>
</body>
</html>