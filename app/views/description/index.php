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
                    <table id="descTable">

                    </table>
                </div>
            </div>
    </div>
    <!-- end of Main content -->
</div>

<!-- wrapper end at footer file-->