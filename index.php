<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Random Number Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    #num-box-wrapper {
        font-size: 4rem;
    }
    .num-box {
        padding: 2px 5px 5px;
        border: 6px solid #ff9b9b;
        line-height: 4rem;
        border-radius: 20px;
        margin-top: 35vh;
    }
    #num-box-wrapper .btn {
        padding: 10px 65px;
        border-radius: 10px;
    }
</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-8 col-xs-12 offset-md-3 offset-sm-2">
                <div id="num-box-wrapper" class="text-center">
                    <div class="num-box">Hello World!</div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn btn-primary">Client Side!</div>
                        </div>
                        <div class="col-md-6">
                            <div class="btn btn-success">Server Side!</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>