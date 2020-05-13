
        <!-- Main content -->
        <section class="content">
            <h3 class="text-center">DataTable </h3>
            <div class="col-12">
                <table id="selectedData" class="table table-striped table-bordered ">
                                <thead>
                                <tr>
                                    <?php
                                    if (isset($entities[0])) {
                                        $tableName = $entities[0];

                                        foreach ($tableName as $key => $value):
                                            echo "<th>$key</th>";
                                        endforeach;
                                    } else {
                                        echo "<th></th>";
                                    }

                                    ?>

                                </tr>
                                </thead>
                                <tbody>

                                <?php

                                foreach ($entities as $info) {

                                    echo "<tr>";
                                    foreach ($info as $data) {
                                        echo "<td style='text-align: center'>" . $data . "</td>";
                                    }
                                    echo "</tr>";
                                }

                                ?>

                                </tbody>
                                <tfoot>
                                <tr>
                                    <?php
                                    if (isset($entities[0])) {
                                        $tableName = $entities[0];
                                        foreach ($tableName as $key => $value):
                                            echo "<th>$key</th>";
                                        endforeach;
                                    } else {
                                        echo "<th></th>";
                                    } ?>
                                </tr>
                                </tfoot>
                            </table>
                        </div>

            <div class=" text-center">
                <input class="btn btn-primary" onclick="window.location.href='selector'" type="button" value="back">
                <input class="btn btn-primary" type="button" onclick="window.location.href='http://<?php echo fullUrl ?>'" value="home">
             </div>
        </section>
