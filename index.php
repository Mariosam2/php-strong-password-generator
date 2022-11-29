<?php
require __DIR__ . '/dictionary.php';
require __DIR__ . '/functions.php';
var_dump($_GET);
/*var_dump($letters); */

if (!empty($_GET)) {
    if (isset($_GET['passLen']) && isset($_GET['dictionary']) && isset($_GET['rep'])) {
        $dictionary = generateDictionary($_GET['dictionary'], $letters, $numbers, $symbols);
        //var_dump($dictionary);
        shuffle($dictionary);
        //var_dump($dictionary);
        $user_password = generatePassword($dictionary, intval($_GET['passLen']), $_GET['rep']);
        //var_dump($user_password);
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Password Generator</title>
    <style>
        .field {
            width: 20%;
        }

        form>* {
            padding: 0.5rem 0;
        }
    </style>
</head>

<body>
    <div id="app">
        <main id="site_main">
            <div class="container pt-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-7">
                        <h1 class="text-center">Strong Password Generator</h1>
                        <h2 class="text-center">Generate a safe password</h2>
                        <div class="output py-3 text-center">
                            <?php if (isset($user_password) && $user_password <> '') { ?>
                                <span>Your Password is:</span>
                                <h3><?= $user_password ?></h3>
                            <?php } else { ?>
                                <span>Fill all the fields</span>
                            <?php } ?>
                        </div>
                        <form action="index.php" method="get" class="p-5 d-flex flex-column">
                            <div class="length d-flex justify-content-between">
                                <h4>Select the password length</h4>
                                <label for="passLen"></label>
                                <input class="field" type="number" name="passLen" id="passLen" min="4" max="16">
                            </div>
                            <!--/.length -->
                            <fieldset class="rep d-flex justify-content-between">
                                <h4>Permit repetition of characters</h4>
                                <div class="field">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rep" id="" value="yes" checked>
                                        <label class="form-check-label" for="rep">
                                            Yes
                                        </label>
                                    </div>
                                    <div class="form-check ">
                                        <input class="form-check-input" type="radio" name="rep" id="" value="no">
                                        <label class="form-check-label" for="rep">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <!--/.rep -->
                            <div class="symbols align-self-end field">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="dictionary[letters]" value="on" id="">
                                    <label class="form-check-label" for="letters">
                                        Letters
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="dictionary[nums]" value="on" id="">
                                    <label class="form-check-label" for="nums">
                                        Numbers
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="dictionary[symbols]" value="on" id="">
                                    <label class="form-check-label" for="symbols">
                                        Symbols
                                    </label>
                                </div>
                            </div>
                            <!--/.symbols -->
                            <div class="field d-flex">
                                <button type="submit" class="btn btn-primary mx-2">Submit</button>
                                <button type="reset" class="btn btn-danger mx-2">Reset</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </main>
        <!-- /#site_main -->
    </div>
</body>

</html>