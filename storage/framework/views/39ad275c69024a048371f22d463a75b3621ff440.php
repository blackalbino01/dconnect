<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <title>Sign In – dconnect</title>
        <meta name="description" content="#">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap core CSS -->
        <link href="<?php echo e(asset('css/lib/bootstrap.min.css')); ?>" type="text/css" rel="stylesheet">
        <!-- dconnect core CSS -->
        <link href="<?php echo e(asset('css/swipe.min.css')); ?>" type="text/css" rel="stylesheet">
        <!-- Favicon -->
        <link href="<?php echo e(asset('img/favicon.png')); ?>" type="image/png" rel="icon">
        <script src="https://kit.fontawesome.com/24b176e56b.js" crossorigin="anonymous"></script>
    </head>
    <body class="start">
        <main>
            <div class="layout">
                <!-- Start of Sign In -->
                <div class="main order-md-1">
                    <div class="start">
                        <div class="container">
                            <div class="col-md-12">
                                <div class="content">
                                    <h1>Sign in to dconnect</h1>
                                    <div class="third-party">
                                        <button class="btn item bg-blue">
                                            <i class="fab fa-google"></i>
                                        </button>
                                        <button class="btn item bg-teal">
                                            <i class="fab fa-facebook"></i>
                                        </button>
                                        <button class="btn item bg-purple">
                                            <i class="fab fa-twitter"></i>
                                        </button>
                                    </div>
                                    <p>or use your email account:</p>
                                    <form method="POST" action="<?php echo e(route('login')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Email" name="email" required  autofocus>

                                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                            <button class="btn icon"><i class="fab fa-envelope"></i></button>
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Password" name="password" required autocomplete="current-password">

                                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                            <button class="btn icon"><i class="fab fa-lock"></i></button>
                                        </div>
                                        <button type="submit" class="btn button">Sign In</button>
                                        <div class="callout">
                                            <span>Don't have account? <a href="<?php echo e(route('register')); ?>">Create Account</a></span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Sign In -->
                <!-- Start of Sidebar -->
                <div class="aside order-md-2">
                    <div class="container">
                        <div class="col-md-12">
                            <div class="preference">
                                <h2>Hello, Friend!</h2>
                                <p>Enter your personal details and start your journey with dconnect today.</p>
                                <a href="<?php echo e(route('register')); ?>" class="btn button">Sign Up</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Sidebar -->
            </div> <!-- Layout -->
        </main>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo e(asset('js/jquery-3.3.1.slim.min.js')); ?>" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="<?php echo e(asset("js/vendor/jquery-slim.min.js")); ?>"><\/script>')</script>
        <script src="<?php echo e(asset('js/vendor/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    </body>


</html><?php /**PATH C:\Users\user\laravelproject\chatapp\resources\views/auth/login.blade.php ENDPATH**/ ?>