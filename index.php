<?php

$verte1 = 0;
$verte2 = 0;
if (isset($_POST['verte1'], $_POST['verte2'])) {
    $verte1 = $_POST['verte1'];
    $verte2 = $_POST['verte2'];


}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Užduočių generatorius</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

<div class="container-xxl">
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand text-uppercase" href="#">
                <!--            <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">-->
                Interaktyvių užduočių generatorius
            </a>
        </div>
    </nav>
    <form action="" method="post">
        <div class="row d-flex justify-content-center my-4">
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        Pasirinkite lentelės dydį
                    </div>
                    <div class="card-body">
                        <div>
                            <input type="radio" name="verte1" value=5>
                            <label>Lentelės dydis 5x5</label>
                        </div>
                        <div>
                            <input type="radio" name="verte1" value=10>
                            <label>Lentelės dydis 10x10</label>
                        </div>
                        <div>
                            <input type="radio" name="verte1" value=15>
                            <label>Lentelės dydis 15x15</label>
                        </div>
                        <div>
                            <input type="radio" name="verte1" value=20>
                            <label>Lentelės dydis 20x20</label>
                        </div>
                        <div>
                            <input type="radio" name="verte1" value=25>
                            <label>Lentelės dydis 25x25</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        Pasirinkite sudėtingumo lygį
                    </div>
                    <div class="card-body">
                        <div>
                            <input type="radio" name="verte2" value=9>
                            <label>Lygis-1 (10% paslėpta)</label>
                        </div>
                        <div>
                            <input type="radio" name="verte2" value=7>
                            <label>Lygis-2 (30% paslėpta)</label>
                        </div>
                        <div>
                            <input type="radio" name="verte2" value=5>
                            <label>Lygis-3 (50% paslėpta)</label>
                        </div>
                        <div>
                            <input type="radio" name="verte2" value=3>
                            <label>Lygis-4 (70% paslėpta)</label>
                        </div>
                        <div>
                            <input type="radio" name="verte2" value=2>
                            <label>Lygis-5 (80% paslėpta)</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center my-3">
            <button class="btn btn-success col-5" type="submit">SUGENERUOTI UŽDUOTĮ</button>
        </div>
    </form>
    <div class="col-12 mx-auto">
        <div class="mx-auto
             <?= $verte1 == 5 ? "col-3" : "" ?>
             <?= $verte1 == 10 ? "col-6" : "" ?>
             <?= $verte1 == 15 ? "col-8" : "" ?>
             <?= $verte1 == 20 ? "col-10" : "" ?>
             <?= $verte1 == 25 ? "col-12" : "" ?>
             ">
            <table class="table table-bordered text-center">
                <?php for ($i = 1; $i <= $verte1; $i++) { ?>
                    <tr class="border-info">
                        <?php for ($k = 1; $k <= $verte1; $k++) { ?>
                            <td class="border-info <?= ($i == 1 || $k == 1) ? "table-dark" : "table-light" ?>"
                                style="width: 10px"> <?= ($i == 1 || $k == 1) ? ($k * $i) : (rand(1, 10) < $verte2 ? $k * $i : "") ?> </td>
                        <?php } ?>
                    </tr> <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>