<!--<table>-->
<!--    --><?php //foreach ($entities as $item): ?>
<!--        <tr>-->
<!--            <td>--><?php //echo $item['INFO_ID'] ?><!--</td>-->
<!--            <td>-->
<!--                --><?php //echo $_SERVER['REQUEST_URI']?>
<!--                -->
<!--    --><?php //endforeach ?>
<!--</table>-->

<!-- start of wrapper -->
<div class="wrapper">


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Info table</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="http://localhost">Home</a></li>
                            <li class="breadcrumb-item active">InfoTable</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <?php
                                    if (isset($entities[0])) {
                                        $tableName = $entities[0];

                                        foreach ($tableName as $key => $value):
                                            echo "<th>$key</th>";
                                        endforeach;
                                    } else {
                                        echo "<th></th>";
                                    }

                                    ?>

                                </tr>
                                </thead>
                                <tbody>

                                <?php

                                foreach ($entities as $info) {

                                    echo "<tr>";
                                    foreach ($info as $data) {
                                        echo "<td style='text-align: center'>" . $data . "</td>";
                                    }
                                    echo "</tr>";
                                }

                                ?>

                                </tbody>
                                <tfoot>
                                <tr>
                                    <?php
                                    if (isset($entities[0])) {
                                        $tableName = $entities[0];
                                        foreach ($tableName as $key => $value):
                                            echo "<th>$key</th>";
                                        endforeach;
                                    } else {
                                        echo "<th></th>";
                                    } ?>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="col-2">
                        <input onclick="window.location.href='selector'" type="button" value="back" >
                            <input type="button" onclick="window.location.href='http://localhost/'" value="home">
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- wrapper end at footer file-->