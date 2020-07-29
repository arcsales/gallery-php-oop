<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin
                <small>Subheading</small>
            </h1>
            <?php

            //create method
            /* $littleJohn = new User();
            $littleJohn->username = "liljohn";
            $littleJohn->password = "123";
            $littleJohn->first_name = "lil";
            $littleJohn->last_name = "john";

            $littleJohn->create(); */

            //update method
            /* $user = User::find_user_by_id(2);
            $user->last_name = "williams";
            $user->update(); */

            //delete user method
            $user = User::find_user_by_id(5);
            $user->delete();

            ?>

            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i> <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Blank Page
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>