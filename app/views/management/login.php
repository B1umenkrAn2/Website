<?php

if (!empty($_SESSION['user'])) {

    header('Location:' . URL . 'management/update');
}
?>

<section class="container col-lg-2 my-3 " style="text-align: center">

            <form class="px-4 py-3 card" method="post" action="update">
                <div class="form-group ">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="form-group ">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary" name="submit">Sign in</button>
                </div>
            </form>
</section>
