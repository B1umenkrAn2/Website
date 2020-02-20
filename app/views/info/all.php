<!--<table>-->
<!--    --><?php //foreach ($entities as $item): ?>
<!--        <tr>-->
<!--            <td>--><?php //echo $item['INFO_ID'] ?><!--</td>-->
<!--            <td>-->
<!--                --><?php //echo $item['PEDON_ID'] ?>
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
                            <li class="breadcrumb-item"><a href="index/index">Home</a></li>
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
                                    <th>Info_ID</th>
                                    <th>PEDON_ID</th>
                                    <th>CAL_YEAR</th>
                                    <th>PROVINCE</th>
                                    <th>LOCALITY</th>
                                    <th>DD_LAT</th>
                                    <th>DD_LONG</th>
                                    <th>CONF_METRS</th>
                                    <th>ELEVATION</th>
                                    <th>EXTENT</th>
                                    <th>PURPOSE</th>
                                    <th>CSSC_ORDER</th>
                                    <th>CSSC_GTGRP</th>
                                    <th>CSSC_SBGRP</th>
                                    <th>CSSC_NAME</th>
                                    <th>CSSC_CODE</th>
                                    <th>TX_FIT</th>
                                    <th>TX_FACTOR1</th>
                                    <th>TX_FACTOR2</th>
                                    <th>LANDUSE</th>
                                    <th>REPORT_ID</th>
                                    <th>PED_NOTES</th>
                                    <th>N_SITES</th>
                                    <th>N_PROFILES</th>
                                    <th>N_CHEMICAL</th>
                                    <th>N_MORPH</th>
                                    <th>N_HORIZONS</th>
                                    <th>N_PHYSICAL</th>
                                </tr>
                                </thead>
                                <tbody>
<!--                                <tr>-->
<!--                                    <td>Trident</td>-->
<!--                                    <td>Internet-->
<!--                                        Explorer 4.0-->
<!--                                    </td>-->
<!--                                    <td>Win 95+</td>-->
<!--                                    <td> 4</td>-->
<!--                                    <td>X</td>-->
<!--                                </tr>-->
                                <?php
                                foreach ($entities as $info){

                                    echo "<tr>";
                                    foreach ($info as $data ){
                                    echo "<td>".$data."</td>";
                                    }
                                    echo "</tr>";
                                }

                                ?>

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Info_ID</th>
                                    <th>PEDON_ID</th>
                                    <th>CAL_YEAR</th>
                                    <th>PROVINCE</th>
                                    <th>LOCALITY</th>
                                    <th>DD_LAT</th>
                                    <th>DD_LONG</th>
                                    <th>CONF_METRS</th>
                                    <th>ELEVATION</th>
                                    <th>EXTENT</th>
                                    <th>PURPOSE</th>
                                    <th>CSSC_ORDER</th>
                                    <th>CSSC_GTGRP</th>
                                    <th>CSSC_SBGRP</th>
                                    <th>CSSC_NAME</th>
                                    <th>CSSC_CODE</th>
                                    <th>TX_FIT</th>
                                    <th>TX_FACTOR1</th>
                                    <th>TX_FACTOR2</th>
                                    <th>LANDUSE</th>
                                    <th>REPORT_ID</th>
                                    <th>PED_NOTES</th>
                                    <th>N_SITES</th>
                                    <th>N_PROFILES</th>
                                    <th>N_CHEMICAL</th>
                                    <th>N_MORPH</th>
                                    <th>N_HORIZONS</th>
                                    <th>N_PHYSICAL</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
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