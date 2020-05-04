<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <style>
        .card {
            margin: 0 auto;
            float: none;
            margin-bottom: 10px;
            position: relative;
            height: 400px;
            width: 20%;
            top: 200px;
        }
        @media only screen and (max-width: 575px){
            .card{
                width: 80%;
            }
        }
        @media only screen and (min-width: 576px) and (max-width: 757px){
            .card{
                width: 60%;
            }
        }
        @media only screen and (min-width: 758px) and (max-width: 991px){
            .card{
                width: 40%;
            }
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    @yield('content')
                </div>
            </div>
        </div>

    </div>
</body>
</html>
