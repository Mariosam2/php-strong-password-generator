<?php
session_start();
require __DIR__ . '/dictionary.php';
require __DIR__ . '/functions.php';
//
//var_dump($_GET);
/*var_dump($letters); */

if (!empty($_GET)) {
    if (isset($_GET['passLen']) && isset($_GET['dictionary']) && isset($_GET['rep'])) {
        $dictionary = generateDictionary($_GET['dictionary'], $letters, $numbers, $symbols);
        //var_dump($dictionary);
        shuffle($dictionary);
        $dictionary = toArrayString($dictionary);
        $user_password = generatePassword($dictionary, intval($_GET['passLen']), $_GET['rep']);
        //var_dump($user_password);
        // redirect Bonus-4
        /* $_SESSION["user_password"] = $user_password;
        header('Location: ' . 'redirect.php');
        die(); */
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<?php require __DIR__ . './head.php' ?>

<body>
    <div id="app">
        <main id="site_main">
            <div class="container pt-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-7 py-5 bg_primary rounded-4">
                        <h1 class="text-center">Strong Password Generator</h1>
                        <h2 class="text-center">Generate a safe password</h2>
                        <div class="output py-3 text-center mt-3 rounded-2">
                            <?php if (isset($user_password) && $user_password <> '') { ?>
                                <span class="ms_caption">Your Password is:</span>
                                <h3><?= $user_password ?></h3>
                            <?php } else { ?>
                                <span class="ms_caption">Fill all the fields</span>
                            <?php } ?>
                        </div>
                        <form action="index.php" method="get" class="p-5 d-flex flex-column text_primary  bg-white rounded-2">
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
                                <button type="submit" class="btn bg_primary mx-2">Generate</button>
                                <button type="reset" class="btn bg_secondary mx-2">Clear</button>
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