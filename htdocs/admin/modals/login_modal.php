<?php include 'config.php'; ?>
<link rel="stylesheet" href="assets/css/login.css"> 
<!--Admin Login modal -->
    <div class="modal animate" role="dialog" tabindex="-1" id="login_modal">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                    <div class="modal-body logincontainer">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="text-center modal-title"> <img class="img-circle" src="icons/admin.png" width="100" height="100"></h4>
                        <p class="text-center modal-title">Sign In</p>
                        <br>
                        <form action="checklogin.php" method="post">
                        <div>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="username" placeholder="Username" required autofocus class="form-control" />
                            </div>
                            <br>
                        </div>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" name="password" placeholder="Password" required class="form-control" />
                        </div>
                        <br>
                        <button class="btn btn-primary btn-success btn-block btn-sm" type="submit"><i class="glyphicon glyphicon-log-in"></i> Login </button>
                        <br><button class="btn btn-primary btn-danger btn-block btn-sm" type="button" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Cancel </button>
                    </form>
                    </div>
            </div>
        </div>
    </div>