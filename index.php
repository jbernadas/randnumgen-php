
<?php
    function php_rand_num() {
        $rnumb = '';
        $rnumb = rand();
        echo $rnumb;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Random Number Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    body {
        background: #fff2f2;
    }
    h1.text-center {
        margin-top: 2vw;
        color: grey;
        font-size: 4rem;
    }
    #num-box-wrapper {
        font-size: 4rem;
    }
    .num-box {
        padding: 2px 5px 5px;
        border: 6px inset #ff9b9b;
        line-height: 4rem;
        border-radius: 20px;
        margin-top: 30vh;
        color: #6a6a6a;
        overflow-wrap: anywhere;
        background: #d2ebff;
    }
    #num-box-wrapper .btn {
        padding: 10px 65px;
        border-radius: 7px;
    }
</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1 class="text-center">Random Number Generator</h1>
            <div class="col-md-6 col-sm-8 col-xs-12 offset-md-3 offset-sm-2">
                <div id="num-box-wrapper" class="text-center">
                    <div class="num-box" id="numbBox">Hello World!</div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn btn-primary" onclick="clientSideNumbBoxUpdater()">Client Side!</div>
                        </div>
                        <div class="col-md-6">
                            <div class="btn btn-success" onclick="serverSideNumbBoxUpdater()">Server Side!</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function randNumGen() {
            return Math.floor(Math.random() * 100000000000000) * 1;
        }
        function clientSideNumbBoxUpdater() {
            document.getElementById('numbBox').textContent = randNumGen()
        }
        function serverSideNumbBoxUpdater() {
            document.getElementById('numbBox').textContent = "<?php php_rand_num(); ?>";

        }
    </script>
</body>
</html>