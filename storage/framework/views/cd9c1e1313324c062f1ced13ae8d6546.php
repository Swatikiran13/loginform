<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Register</title>
</head>
<body>
<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Register User</h3>
                    <div class="card-body">
                        <form action="<?php echo e(route('postregister')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name" autofocus>
                                <?php if($errors->has('name')): ?>
                                <span class="text-danger">The name field is required.</span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email_address" class="form-control" name="email" autofocus>
                                <?php if($errors->has('email')): ?>
                                <span class="text-danger">The email field is required</span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password">
                                <?php if($errors->has('password')): ?>
                                <span class="text-danger">The password field is required</span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember"> Remember Me</label>
                                </div>
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn bg-primary text-white btn-block">Register</button>
                                <a href="login">Already have an account?</a>
                            </div>
                        </form>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</main>
</body>
</html><?php /**PATH C:\xampp\htdocs\loginswati\resources\views/register.blade.php ENDPATH**/ ?>