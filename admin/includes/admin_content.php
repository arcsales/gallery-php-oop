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
            $littleJohn->username = "newUser";
            $littleJohn->password = "123";
            $littleJohn->first_name = "New";
            $littleJohn->last_name = "User";

            $littleJohn->create(); */

            //update method
            /* $user = User::find_by_id(6);
            $user->last_name = "Williams";
            $user->update(); */

            //delete method
            /* $user = User::find_by_id(6);
            $user->delete(); */

            //save method to update
            /* $user = User::find_by_id(7);
            $user->username = "Whatever";
            $user->password = 333;
            $user->first_name = "Ivan";
            $user->last_name = "Ivanov";
            $user->save(); */

            //save method to create
            /* $user = new User();
            $user->username = "Whatever_2000";
            $user->save(); */

            //find all method
            /* $users = User::find_all();
            foreach ($users as $user) {
                echo $user->username . "</br>";
            } */

            //find all method
            /* $photos = Photo::find_all();
            foreach ($photos as $photo) {
                echo $photo->title . "</br>";
            } */

            //create method
            /* $image = new Photo();
            $image->title = "newUser";
            $image->description = "newUsernewUsernewUser";
            $image->filename = "Newimage";
            $image->type = "image";
            $image->size = "23";

            $image->create(); */

            //includes global path
            /* echo INCLUDES_PATH . "</br>"; */

            //site root global path
            /* echo SITE_ROOT; */

            //find_by_id method
            /* $user = User::find_by_id(7);
            echo $user->username; */

            /* $photos = User::find_all();
            foreach ($photos as $photo) {
                echo $photo->filename . "</br>"; */

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