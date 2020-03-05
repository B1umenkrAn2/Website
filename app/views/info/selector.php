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
                table select
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
            <div class="col-2"></div>


        </div>
        <button type="submit">submit</button>
    </form>
</div>