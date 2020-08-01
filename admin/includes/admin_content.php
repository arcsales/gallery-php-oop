<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin
                <small>Subheading</small>
            </h1>
            <?php

            //create method for User class
            /* $littleJohn = new User();
            $littleJohn->username = "newUser";
            $littleJohn->password = "123";
            $littleJohn->first_name = "New";
            $littleJohn->last_name = "User";

            $littleJohn->create(); */

            //update method for User class
            /* $user = User::find_user_by_id(6);
            $user->last_name = "Williams";
            $user->update(); */

            //delete user method for User class
            /* $user = User::find_user_by_id(6);
            $user->delete(); */

            //save user method to update user by id for User class
            /* $user = User::find_user_by_id(7);
            $user->username = "Whatever";
            $user->password = 333;
            $user->first_name = "Ivan";
            $user->last_name = "Ivanov";
            $user->save(); */

            //save user method to create user for User class
            /* $user = new User();
            $user->username = "Whatever_2000";
            $user->save(); */

            //find all method for User class
            /* $users = User::find_all();
            foreach ($users as $user) {
                echo $user->username . "</br>";
            } */

            //find all method for Photo class
            /* $photos = Photo::find_all();
            foreach ($photos as $photo) {
                echo $photo->title . "</br>";
            } */

            //create method for Photo class
            /* $image = new Photo();
            $image->title = "newUser";
            $image->description = "newUsernewUsernewUser";
            $image->filename = "Newimage";
            $image->type = "image";
            $image->size = "23";

            $image->create(); */

            echo INCLUDES_PATH."</br>";
            echo SITE_ROOT;

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