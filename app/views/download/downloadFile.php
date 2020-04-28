
<div class="wrapper">


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Home</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="http://<?php echo fullUrl ?>">Home</a></li>
                            <li class="breadcrumb-item active">Download page</li>
                        </ol>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!--     /.content-header -->


        <!--     Main content -->
        <section class="content">
            <div class="container-fluid">
                <h1 >download page</h1>
                <?php if (!isset($nodata)): ?>
                <input type="button"  value="Download" onclick="window.location.href='http://<?php echo fullUrl.$download ?>'">
                <?php else:  ?>
                <p><?php echo $nodata ?></p>
                <?php endif; ?>
                <input type="button"  value="Home" onclick="window.location.href='http://<?php echo fullUrl ?>'">
                <input type="button" value="back" onclick="window.location.href='http://<?php echo fullUrl ?>download/selector'">
            </div>
            <!-- end of Main content -->
    </div>

    <!-- wrapper end at footer file-->