<?php
include __DIR__ . '/dictionary.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Password Generator</title>
</head>

<body>
    <main id="site_main">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1></h1>
                    <h2></h2>
                    <div class="output">
                        <span></span>
                        <h2></h2>
                    </div>
                    <form action="index.php" method="get">
                        <div class="length">
                            <label for="passLen"></label>
                            <input type="number" name="passLen" id="passLen">
                        </div>
                        <!--/.length -->
                        <div class="rep">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="" id="">
                                <label class="form-check-label" for="">
                                    Default radio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="" id="">
                                <label class="form-check-label" for="">
                                    Default radio
                                </label>
                            </div>
                        </div>
                        <!--/.rep -->
                        <div class="symbols">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="">
                                <label class="form-check-label" for="">
                                    Default checkbox
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="">
                                <label class="form-check-label" for="">
                                    Default checkbox
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="">
                                <label class="form-check-label" for="">
                                    Default checkbox
                                </label>
                            </div>
                        </div>
                        <!--/.symbols -->
                    </form>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </main>
    <!-- /#site_main -->

</body>

</html>