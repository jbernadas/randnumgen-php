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
        margin-top: .2vw;
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
        margin-top: 26vh;
        color: #6a6a6a;
        overflow-wrap: anywhere;
        background: #d2ebff;
        max-width: 500px;
        margin: 26vh auto 0;
    }
    #num-box-wrapper .btn {
        padding: 10px 65px;
        border-radius: 7px;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1 class="text-center">PHP Random Number Generator</h1>
            <div class="col-md-6 col-sm-8 col-xs-12 offset-md-3 offset-sm-2">
                <div id="num-box-wrapper" class="text-center">
                    <div class="num-box" id="numbBox">Hello World!</div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="btn btn-primary" onclick="serverSideNumbBoxUpdater()">Click Me!</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function serverSideNumbBoxUpdater() {
            $.ajax({url:"rand_num_gen.php", success:function(result){
                $('#numbBox').text(result);
            }})
        }
    </script>
</body>
</html>