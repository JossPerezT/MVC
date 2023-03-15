<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema ABC de clientes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <div class="header-row" id="header-row" style="padding: 0px; overflow:hidden; height:100px;">
        <!-- container-fluid is the same as container but spans a wider viewport, 
    it still has padding though so you need to remove this either by adding 
    another class with no padding or inline as I did below -->
        <div class="container-fluid" style="padding: 0px;">
            <div class="row">
                <!-- You originally has it set up for two columns, remove the second 
    column as it is unneeded and set the first to always span all 12 columns 
    even when at its smallest (xs). Set the overflow to hidden so no matter 
    the height of your image it will never show outside this div-->
                <div class="col-xs-12">
                    <a class="navbar-brand logo" href="index.html">
                        <!-- place your image here -->
                        <img src="https://i0.wp.com/www.sonsanddaughtersofthunder.org/wp-content/uploads/2019/05/cropped-free-blue-curved-banner-template-backgrounds-for-powerpoint-in-banner-background-design-white.jpg?fit=1024%2C220&ssl=1"
                            alt="company logo" style="width: 100%;">
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>