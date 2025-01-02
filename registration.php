<?php
require_once('header.php');
require_once('impfuns.php');
?>
<div class="container">
    <h1>Employee Registration</h1>
    <div class="row">
        <?php
        if (isset($_GET['msg'])) {
            $msg = $_GET['msg'];
            echo "<h4 style='color:green'>$msg</h4>";
        }


        ?>
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="card" style="width: 38rem;">

                <div class="card-body">
                    <h5 class="card-title">Employee Registration Form</h5>
                    <form action="register.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="empName">Employee Name</label>
                            <input type="text" class="form-control" id="empName" name="empname" placeholder="Enter Employee Name">

                        </div>
                        <div class="form-group">
                            <label for="empemail">Email Id</label>
                            <input type="text" class="form-control" id="empemail" name="email" placeholder="Email Id">

                        </div>
                        <div class="form-group">
                            <label for="emppass">Password</label>
                            <input type="password" class="form-control" id="emppass" name="pass" placeholder="Password">

                        </div>
                        <div class="form-group">
                            <label for="emppass">Confirm Password</label>
                            <input type="password" class="form-control" id="emppass" name="cpass" placeholder="Password">

                        </div>

                        <div class="form-group">
                            <label for="empName">Role</label>
                            <select class="form-control" name="role">
                                <option>Admin</option>
                                <option>HR</option>
                                <option>Employee</option>

                            </select>
                        </div>

                        <button type="submit" name="regiemp" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>



    </div>



</div>
<?php
require_once('footer.php');
?>