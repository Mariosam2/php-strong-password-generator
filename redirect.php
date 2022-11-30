<?php
//session_start();
//var_dump($_SESSION['user_password'])

?>

<!DOCTYPE html>
<html lang="en">

<?php require __DIR__ . './head.php' ?>

<body>
    <main id="site_main">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-7">
                    <div class="output py-3 text-center mt-3 rounded-2">
                        <?php if (isset($_SESSION['user_password']) && $_SESSION['user_password'] <> '') { ?>
                            <span class="ms_caption">Your Password is:</span>
                            <h3><?= $_SESSION['user_password'] ?></h3>
                        <?php } else { ?>
                            <span class="ms_caption">Fill all the fields</span>
                        <?php } ?>
                    </div>
                </div>
                <!-- /.col-12 col-md-7 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </main>
    <!-- /#site_main -->

</body>

</html>