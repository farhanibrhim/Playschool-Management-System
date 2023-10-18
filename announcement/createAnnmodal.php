<div id="modal-1" class="modal fade" role="dialog" tabindex="-1"> <!-- CREATE AN ANNOUNCEMENT -->
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Create an announcement</h4><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body"> <!-- CONTENT IN MODAL -->
                    <form method="POST" action="announcementprocess.php" enctype="multipart/form-data">
                    <fieldset>
                        <fieldset>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Content Title</label>
                                <input type="text" name=cTitle class="form-control" id="exampleFormControlInput1"
                                    placeholder="(e.g.): Happy Holiday !" required>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="form-label mt-4">Start of event</label>
                                <input type="date" name="sdate" class="form-control" id="" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="form-label mt-4">End of event</label>
                                <input type="date" name="edate" class="form-control" id="" placeholder="" required>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Category (View)</label>
                                <?php
                                $sql = "SELECT * FROM announcement_category_desc";
                                $result = mysqli_query($con, $sql);

                                echo '<select class="form-select" name="ccategory" id="exampleSelect1" required>';
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<option value = '" . $row['announce_Category'] . "'>" . $row['category_Desc'] . "</option>";
                                }
                                echo '</select>';

                                ?>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Type</label>
                                <?php
                                $sql = "SELECT * FROM announcement_type_desc";
                                $result = mysqli_query($con, $sql);

                                echo '<select class="form-select" name="ctype" id="exampleSelect1" required>';
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<option value = '" . $row['announce_Type'] . "'>" . $row['type_Desc'] . "</option>";
                                }
                                echo '</select>';

                                ?>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Description</label>
                                <textarea class="form-control" name="cdesc" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </fieldset>
                        <fieldset>
                                  <br><div class="form-group">
                                    <label>Select Image File:</label>
                                    <input type="file" name="cmedia" id="cmedia" accept=".png, .jpg, .jpeg" required>
                                    <br><br>
                                    <!--<button type="reset" class="btn btn-info">Clear</button>
                                    <button type="submit" name="submit" class="btn btn-info">Submit</button>-->
                                    <input type="hidden" name="cid" value="<?php echo $row['announce_ID']?>">
                                </div>
                        </fieldset>
                    </fieldset>
                </div>
                <div class="modal-footer"><button type="reset" class="btn btn-info">Clear</button><button type="submit" name="submit" class="btn btn-info">Submit</button></div>
            </form>
            </div>
        </div>
    </div>