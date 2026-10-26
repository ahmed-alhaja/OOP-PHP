<?php
require_once dirname(__FILE__, 2) . '/config/config.php';
require_once dirname(__FILE__, 2) . '/functions/sessionfunc.php';

session_start();
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Form</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h4 class="text-center mb-0">Register Form</h4>
                    </div>

                    <div class="card-body">
                        <form action="<?= BASE_URL ?>controller/sessionController.php" method="POST">

                            <div class="mb-3">
                                <label for="email" class="form-label">
                                    Email
                                </label>
                                <input
                                    type="email"
                                    class="form-control"
                                    id="email"
                                    name="email"
                                    placeholder="Enter your email">
                                <?php if ($_SESSION) : ?>
                                    <?php Session::flash('danger', Session::get('email')) ?>
                                    <?php Session::remove('email') ?>
                                <?php endif; ?>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">
                                    Password
                                </label>
                                <input
                                    type="password"
                                    class="form-control"
                                    id="password"
                                    name="password"
                                    placeholder="Enter your password">
                                <?php if ($_SESSION) : ?>
                                    <div class="alert alert-danger">
                                        <?= Session::get('password'); ?>
                                        <?php Session::remove('password') ?>
                                    </div>
                                <?php endif; ?>

                            </div>


                            <button
                                type="submit"
                                class="btn btn-primary w-100">
                                Submit
                            </button>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>