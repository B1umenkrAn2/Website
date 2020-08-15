<html>
<head>
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=yes"/>
    <title><?php echo $title ?></title>

    <!--    bootstrap -->
    <link as="style" rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link as=style rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link as=style rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap4.min.css">
    <link as=style rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">


</head>


<body>
<header>
    <div hidden class="alert alert-info text-center mb-0 rounded-0 alert-dismissible fade show">
        form update success!
        <button class="close" data-dismiss="alert">X</button>
    </div>


    <div class="container ">
        <nav class="navbar navbar-expand-sm navbar-light">
            <a href="//<?php echo fullUrl?>" class="navbar-barnd">Casis NPDV</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="menu" class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="//<?php echo fullUrl?>info/selector" class="nav-link">Database</a></li>
                    <li class="nav-item"><a href="//<?php echo fullUrl?>Description" class="nav-link">Description</a></li>
<!--                    <li class="nav-item"><a href="//--><?php //echo fullUrl?><!--download/selector" class="nav-link">Data download</a></li>-->
                    <li class="nav-item"><a href="//<?php echo fullUrl?>Management/login" class="nav-link">Management</a></li>

                </ul>
            </div>

                <div class="d-none d-lg-block " >
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="//<?php echo fullUrl ?>">Home</a></li>
                        <li class="breadcrumb-item active text-capitalize"><?php echo $title ?></li>
                    </ol>
                </div>

        </nav>
    </div>
    <div class=" myHeader bg-warning text-dark text-center py-5">
        <h1 class="display-4 mb-3">National padon data viewer</h1>
    </div>
</header>
<main >