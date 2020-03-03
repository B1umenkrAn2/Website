<div class="container">
    <form action="info/selector" method="post">
        <div class="row">

            <div class="col-sm-6">
                <!-- select -->
                <div class="form-group">
                    <label>Select Year</label>
                    <select class="form-control">
                        <?php
                        foreach ($year as $info) {
                            foreach ($info as $data) {
                                echo "<option>" . $data . "</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-sm-6">
                <!-- select -->
                <div class="form-group">
                    <label>Select PROVINCE</label>
                    <select class="form-control">
                       <?php
                        foreach ($province as $info) {
                            foreach ($info as $data) {
                                echo "<option>" . $data . "</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>


        </div>
        <button type="submit">submit</button>
    </form>
</div>