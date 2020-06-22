<!DOCTYPE html>
<html lang="en">
    
<?php require 'head.php'; ?>

    <body class="text-center">

        <form class="form-signin" action="app/formLogin.php" method="post">
            <img class="mb-4" src="https://getbootstrap.com/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
                <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                    <label for="inputEmail" class="sr-only">Email address</label>
                        <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                    <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required="">
                            <div class="checkbox mb-3">
                                <label>
                                    <input name="remember-me" type="checkbox" value="remember-me"> Remember me
                                </label>
                            </div>
                        <input type="hidden" id="Authorization" name="Authorization" class="form-control" >    
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                <p class="mt-5 mb-3 text-muted">© 2017-2020</p>
        </form>

    </body>

</html>