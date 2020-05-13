

<section class="container my-3">
    <form action="selected" method="post" >
        <div class="row">
            <div class="col-lg-4 text-center">
                <!-- select -->
                <div >
                    <label>Select Year</label>
                    <select  name="year">
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
                    <input type="checkbox" name="tables[]" value="0">
                </label>
                <label>Profiles
                    <input type="checkbox" name="tables[]" value="1">
                </label>
                <label>Horizons
                    <input type="checkbox" name="tables[]" value="2">
                </label>
                <label>Morphology
                    <input type="checkbox" name="tables[]" value="3">
                </label>
                <label>Physical
                    <input type="checkbox" name="tables[]" value="4">
                </label>
                <label>chemical
                    <input type="checkbox" name="tables[]" value="5">
                </label>
            </div>
        </div>
        <div class="container text-center">
        <input class="btn btn-primary" type="submit" value="Submit" />
        <input class="btn btn-primary" type="button" onclick="window.location.href='http://<?php echo fullUrl ?>'" value="back" />
        </div>
    </form>
</section>