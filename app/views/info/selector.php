

<section class="container my-3">
    <form action="selected" method="post" >
        <div class="row">
            <div class="col-lg-4 text-center">
                <!-- select -->
                <div >
                    <label>Select Year</label>
                    <select  name="year">
<!--                        <option value="all">All</option>-->
                        <?php
                        foreach ($year as $info) {
                            foreach ($info as $data) {
                                echo "<option value='$data'>" . $data . "</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <!-- select -->
                <div >
                    <label>Select province</label>
                    <select  name="province">
<!--                        <option  value="all">All</option>-->
                        <?php
                        foreach ($province as $info) {
                            foreach ($info as $data) {
                                echo "<option value='$data'>" . $data . "</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="col-lg-4 text-center">
                <p>Table Select</p>
                <label>info</label>
                <input type="checkbox" checked disabled>
                <label>Sites
                    <input type="checkbox" name="tables[]" value='Sites'>
                </label>
                <label>Profiles
                    <input type="checkbox" name="tables[]" value='Profiles'>
                </label>
                <label>Horizons
                    <input type="checkbox" name="tables[]" value='Horizons'>
                </label>
                <label>Physical
                    <input type="checkbox" name="tables[]" value='Physical'>
                </label>
                <label>chemical
                    <input type="checkbox" name="tables[]" value='Chemical'>
                </label>
                <label>Morphology
                    <input type="checkbox" name="tables[]" value='Moro'>
                </label>
            </div>
        </div>
        <div class="container text-center">
        <input class="btn btn-primary" type="submit" value="Submit" />
        <input class="btn btn-primary" type="button" onclick="window.location.href='http://<?php echo fullUrl ?>'" value="back" />
        </div>
    </form>
</section>