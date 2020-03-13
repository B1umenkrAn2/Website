<!-- start of wrapper -->
<script>
    $(".talbes").click(function () {
        var tables = $(".tables");
        if (tables.val() === 'Info') {
            $("#descTable")
        } else if (tables.val() === 'Chemical') {

        } else if (tables.val() === 'Sites') {

        } else if (tables.val() === 'Profiles') {

        } else if (tables.val() === 'Physical') {

        } else if (tables.val() === 'Morphology') {

        } else if (tables.val() === 'Horizons') {

        }

    })

</script>
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
                            <li class="breadcrumb-item"><a href="http://localhost">Home</a></li>
                            <li class="breadcrumb-item active">Home</li>
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
                <h1>Informal description</h1>
                <p>
                    A limited dataset of vetted Canadian Soil Information Service holdings for location specific soils
                    data extracted from Agriculture and Agri-Food Canada’s National Pedon Database (NPDB). The NPDB is a
                    central repository for storing and disseminating location-specific (pedon) soils data from across
                    Canada.
                </p>
                <div class="row col-12">
                    <div class="col-4">
                        <input type="button" value="Chemical" onclick=""/></div>
                    <div class="col-4">
                        <input type="button" value="info" onclick=""/></div>
                    <div class="col-4">
                        <input type="button" value="info" onclick=""/></div>
                    <div class="col-4">
                        <input type="button" value="info" onclick=""/></div>
                    <div class="col-4">
                        <input type="button" value="info" onclick=""/></div>
                    <div class="col-4">
                        <input type="button" value="info" onclick=""/></div>
                    <div class="col-4">
                        <input type="button" value="info" onclick=""/></div>
                    <div class="col-4">
                        <input type="button" value="info" onclick=""/></div>


                </div>
                <div class="row col-12">
                    <table id="infoTable" class="col-12">
                        <tr>
                            <td>Column name</td>
                            <td>Definition</td>
                        </tr>
                        <tr>
                            <td>PEDON_ID</td>
                            <td>Pedon identifier</td>
                        </tr>

                        <tr>
                            <td>PROVINCE</td>
                            <td>Province where pedon was sampled</td>
                        </tr>
                        <tr>
                            <td>CAL_YEAR</td>
                            <td>Year</td>
                        </tr>
                        <tr>
                            <td>CSSC_ORDER</td>
                            <td>Identifies the soil order according to the Canadian System of Soil Classification</td>
                        </tr>
                        <tr>
                            <td>CSSC_GTGRP</td>
                            <td>Identifies the soil great group according to the Canadian System of Soil Classification</td>
                        </tr>
                        <tr>
                            <td>CSSC_SBGRP</td>
                            <td>Identifies the soil subgroup according to the Canadian System of Soil Classification</td>
                        </tr>

                        <tr>
                            <td>CSSC_NAME</td>
                            <td>Identifies the Series Name according to the Canadian System of Soil Classification</td>
                        </tr>

                        <tr>
                            <td>CSSC_CODE</td>
                            <td>Identifies the Series Code according to the Canadian System of Soil Classification</td>
                        </tr>

                        <tr>
                            <td>TX_FACTOR1</td>
                            <td>First deviating factor distinguishing a soil sample from a modal pedon of its soil series (e.g. soil depth,
                                colour)
                            </td>
                        </tr>

                        <tr>
                            <td>TX_FACTOR2</td>
                            <td>Second deviating factor distinguishing a soil sample from a modal pedon of its soil series (e.g. soil depth,
                                colour)
                            </td>
                        </tr>

                        <tr>
                            <td>TX_FIT</td>
                            <td>A description for the relationship between a soil and its taxonomic class</td>
                        </tr>

                        <tr>
                            <td>EXTENT</td>
                            <td>Extent relative to other soils in the survey area</td>
                        </tr>
                        <tr>
                            <td>LANDUSE</td>
                            <td>Site land use</td>
                        </tr>

                        <tr>
                            <td>ELEVATION</td>
                            <td>Elevation (metres)</td>
                        </tr>

                        <tr>
                            <td>DD_LAT</td>
                            <td>Latitude expressed as decimal degrees</td>
                        </tr>
                        <tr>
                            <td>DD_LONG</td>
                            <td>Longitude expressed as decimal degrees</td>
                        </tr>
                        <tr>
                            <td>CONF_METRS</td>
                            <td>Estimated location accuracy of pedon (metres)</td>
                        </tr>
                        <tr>
                            <td>PURPOSE</td>
                            <td>Purpose of Sampling</td>
                        <tr>
                        <tr>
                            <td>LOCALITY</td>
                            <td>A descriptive term to help identify the location of a sample below the level Province, County, Township,
                                Road Junction
                            </td>
                        </tr>
                        <tr>
                            <td>PED_NOTES</td>
                            <td>Notes regarding pedon</td>
                        </tr>
                        <tr>
                            <td>N_MORPH</td>
                            <td>Quantity of pedon attributes in the Pedon Morphology table</td>
                        </tr>

                        <tr>
                            <td>N_SITES</td>
                            <td>Quantity of pedon attributes in the Pedon Sites table</td>
                        </tr>

                        <tr>
                            <td>N_PROFILES</td>
                            <td>Quantity of pedon attributes in the Pedon Profiles table</td>
                        </tr>

                        <tr>
                            <td>N_HORIZONS</td>
                            <td>Quantity of pedon attributes in the Pedon Horizons table</td>
                        <tr>

                        <tr>
                            <td>N_PHYSICAL</td>
                            <td>Quantity of pedon attributes in the Pedon Physical table</td>
                        </tr>

                        <tr>
                            <td>N_CHEMICAL</td>
                            <td>Quantity of pedon attributes in the Pedon Chemical table</td>
                        </tr>

                        <tr>
                            <td>REPORT_ID</td>
                            <td>Provincial soil survey report ID</td>
                        </tr>


                    </table>


                    <table id="descTable">

                    </table>
                </div>
            </div>
    </div>
    <!-- end of Main content -->
</div>

<!-- wrapper end at footer file-->