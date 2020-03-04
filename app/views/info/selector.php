<div class="container">
    <form action="selected" method="post">
        <div class="row">

            <div class="col-2">
                <!-- select -->
                <div class="form-group">
                    <label>Select Year</label>
                    <select class="form-control" name="year">
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
            <div class="col-4">
                <!-- select -->
                <div class="form-group">
                    <label>Select province</label>
                    <select class="form-control" name="province">
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

            <div class="col-2">
                <label>table select</label>
                info <input type="checkbox" checked disabled>
                Profiles <input type="checkbox" value="profiles" >
                Horizons <input type="checkbox" value="horizons">
                chemical <input type="checkbox" value="chemical">
                Physical <input type="checkbox" value="physical">
                Morphology <input type="checkbox" value="morphology">
            </div>
            <div class="col-2"></div>


        </div>
        <button type="submit">submit</button>
    </form>
</div>