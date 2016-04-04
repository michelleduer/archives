<div class="wide">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 resetPassword-container">
                <div class="col-sm-offset-1">
                    <h2>Reset Password</h2>
                </div>
                <form action="password.php" method="post">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-offset-1 col-sm-4">
                                <input autofocus class="form-control" name="username" placeholder="Username" type="text"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-offset-1 col-sm-4">
                                <input class="form-control" name="password" placeholder="Old Password" type="password"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-offset-1 col-sm-4">
                                <input class="form-control" name="newpassword" placeholder="New Password" type="password"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-offset-1 col-sm-4">
                                <input class="form-control" name="confirmation" placeholder="Confirmation" type="password"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-offset-1 col-sm-4">
                                <button id="resetButton" type="submit" class="btn btn-lrg btn btn-info btn-block">Reset Password</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-6 text-center">
                                <a href="/login.php" class="btn btn-default btn-default" id="switchLogin">Log In</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div><!----end col-sm-6 form-container---->
        </div><!----end row---->
    </div><!----end container-fluid---->
</div><!----end wide---->
