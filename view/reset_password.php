<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section>
        <form action="./../control/action_resetPass.php" method="post">
            <div class="form-outline flex-fill mb-0">


                <input type="email" id="psw" class="form-control" name="email" />
                <label class="form-label" for="email">Your Email</label>
                <?php if (isset($_GET['email_error'])) { ?>

                    <p class="error">
                        <?php echo $_GET['email_error']; ?>
                    </p>

                <?php } ?>
            </div>

            <div class="form-outline flex-fill mb-0">
                <input type="password" id="psw" class="form-control" name="psw" />
                <label class="form-label" for="psw">Password</label>
                <?php if (isset($_GET['pass_error'])) { ?>

                    <p class="error">
                        <?php echo $_GET['pass_error']; ?>
                    </p>

                <?php } ?>
            </div>

            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                <button type="submit" class="btn btn-primary btn-lg">Reset</button>
            </div>
        </form>
    </section>






    <!-- FOOTER -->
    <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy; "2023 NVOnline.". &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>