<?php
if (!$_SESSION['user'] != null)

    header('Location:' . URL . 'management/login');

?>

<section class="container col-lg-6 my-3  card" style="text-align: center">

    <form class="px-4 py-3 " action="result" method="post" enctype="multipart/form-data">
        <div class="form-group ">
            <label>Select file</label>
            <input type="file"  required class="form-control-file  btn-warning" name="file" />
        </div>
        <div class="px-4 py-3 form-group  " >
            <label>Select the update table</label>
            <table>
                <tr>
                    <td>Info</td>
                    <td><input required  type="radio" name="tables" value="Info"></td>

                </tr>

                <tr>
                    <td>Profiles</td>
                    <td><input required type="radio" name="tables" value="Profiles"></td>
                </tr>
                <tr>
                    <td>Sites</td>
                    <td><input required type="radio" name="tables" value="Sites"></td>

                </tr>

                <tr>
                    <td>Chemical</td>
                    <td><input required type="radio" name="tables" value="Chemical"></td>

                </tr>
                <tr>
                    <td>Horizons</td>
                    <td><input  required type="radio" name="tables" value="Horizons"></td>
                </tr>

                <tr>
                    <td>Morphology</td>
                    <td><input required type="radio" name="tables" value="Morphology "></td>
                </tr>

                <tr>
                    <td>Physical</td>
                    <td><input required  type="radio" name="tables" value="Physical"></td>
                </tr>


            </table>
        </div>

        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Upload" name="submit">
        </div>
    </form>
</section>