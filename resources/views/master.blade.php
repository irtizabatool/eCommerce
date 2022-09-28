<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Optional theme -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</head>

<body>
{{View::make('header')}}
@yield('content')
{{View::make('footer')}}
</body>
<style>
    .custom-login {
        height: 400px;
        padding-left: 200px;
        padding-top: 100px;
    }
    img.slider-img {
        height: 400px !important;
    }
    .custom-products {
        height: 600px;
    }
    .slider-text {
        background-color: #35443585 !important;
    }
    .trending-img {
        height: 100px;
    }
    .trending-item {
        float: left;
        width: 25%;
    }
    .trending-wrapper {
        margin: 50px;
    }
    .detail-img {
        height: 200px;
    }
    .cart-list-divider {
        border-bottom: 1px solid gainsboro;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }
</style>
</html>
