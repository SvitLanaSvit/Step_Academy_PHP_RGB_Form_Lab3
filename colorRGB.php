<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <?
        if(isset($_GET["submit"])){
            $r = isset($_GET["r"]) ? intval($_GET["r"]) : 255;
            $g = isset($_GET["g"]) ? intval($_GET["g"]) : 255;
            $b = isset($_GET["b"]) ? intval($_GET["b"]) : 255;
        }
        else{
            $r = 255;
            $g = 255;
            $b = 255;
        }
        $opposite_r = 255 - $r;
        $opposite_g = 255 - $g;
        $opposite_b = 255 - $b;
    ?>

    <style>
        body{
            background-color: rgb(<? echo $r ?>, <? echo $g ?>, <? echo $b ?>);
        }

        span{
            color: rgb(<? echo $opposite_r ?>, <? echo $opposite_g ?>, <? echo $opposite_b ?>);
            font-size: 16px;
        }

        label{
            color: rgb(<? echo $opposite_r ?>, <? echo $opposite_g ?>, <? echo $opposite_b ?>);
        }
    </style>
</head>
<body>

    <div class="container">
        <form method="get">
            <div class="mb-3 w-25">
                <label for="r" class="form-label">R:</label>
                <input type="number" name="r" class="form-control" min="0" max="255" required>
            </div>
            <div class="mb-3 w-25">
                <label for="g" class="form-label">G:</label>
                <input type="number" name="g" class="form-control" min="0" max="255" required>
            </div>
            <div class="mb-3 w-25">
                <label for="b" class="form-label">B:</label>
                <input type="number" name="b" class="form-control" min="0" max="255" required>
            </div>
            <input type="submit" name="submit" class="btn btn-outline-info" value="Accept"/>
        </form>
        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident dolorum nemo molestias enim deserunt porro optio modi, accusamus consectetur nesciunt eius vitae in repudiandae quos facilis asperiores rerum quam similique.</span>
    </div>

</body>
</html>