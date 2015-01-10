<div class="wide">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 login-container">
                <div class="col-sm-offset-1 col-sm-11">
                    <h2>Log In</h2>
                </div>
                <form action="login.php" method="post">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-offset-1 col-sm-5">
                                <input autofocus class="form-control" name="username" id="username" placeholder="Username" type="text"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-offset-1 col-sm-5">
                                <input class="form-control" name="password" id="password" placeholder="Password" type="password"/>
                            </div>
                            <div class="col-sm-4">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-offset-1 col-sm-5">
                                <button id="loginButton" type="submit" class="btn btn-lrg btn btn-warning btn-block">Log In</button> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-7 text-center">
                                <a href="/password.php" class="btn btn-default btn-xs" id="resetPassword">Reset Password</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div><!----end col-sm-6 form-container---->
            <div class="col-sm-6 register-container">
                <div class="col-sm-offset-1 col-sm-11">
                    <h2>Register</h2>
                </div>
                <form action="register.php" method="post">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-offset-1 col-sm-5">
                                <input autofocus class="form-control" name="username" placeholder="Username" type="text"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-offset-1 col-sm-5">
                                <input class="form-control" name="password" placeholder="Password" type="password"/>
                            </div>  
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-offset-1 col-sm-5">
                                <input class="form-control" name="confirmation" placeholder="Confirm Password" type="password"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-offset-1 col-sm-5">
                                <button id="registerButton" type="submit" class="btn btn-lrg btn btn-success btn-block">Register</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div><!----end col-sm-6 form-container---->
        </div><!----end row---->
    </div><!----end container-fluid---->
</div><!----end wide---->
