<?php
$disabled = 'disabled';
require __DIR__ . '/dictionary.php';
/* var_dump($_GET);
var_dump($letters); */
function generateDictionary($array, $letters, $numbers, $symbols)
{
    $tempArray = [];
    if ($array['letters'] === 'on') {
        $tempArray = array_merge($tempArray, $letters);
        //var_dump($tempArray);
    }
    if ($array['nums'] === 'on') {
        $tempArray = array_merge($tempArray, $numbers);
        //var_dump($tempArray);
    }

    if ($array['symbols'] === 'on') {
        $tempArray = array_merge($tempArray, $symbols);
        //var_dump($tempArray);
    }

    return $tempArray;
};

if (!empty($_GET)) {
    $dictionary = generateDictionary($_GET, $letters, $numbers, $symbols);
    var_dump($dictionary);
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
</head>

<body>
    <div id="app">
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
                            <fieldset class="rep">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rep" id="" value="yes">
                                    <label class="form-check-label" for="rep">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rep" id="" value="no">
                                    <label class="form-check-label" for="rep">
                                        No
                                    </label>
                                </div>
                            </fieldset>
                            <!--/.rep -->
                            <div class="symbols">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="letters" value="on" id="">
                                    <label class="form-check-label" for="letters">
                                        Letters
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="nums" value="on" id="">
                                    <label class="form-check-label" for="nums">
                                        Numbers
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="symbols" value="on" id="">
                                    <label class="form-check-label" for="symbols">
                                        Symbols
                                    </label>
                                </div>
                            </div>
                            <!--/.symbols -->
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
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
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script>
        const {
            createApp
        } = Vue
        createApp({
            data() {
                return {
                    disabled: false,
                }
            }
        }).mount('#app')
    </script>
</body>

</html>