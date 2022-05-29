<?php
if (isset($_POST['btn'])) {
    $message = $obj_admin->save_category_info($_POST);
}
?>

<div class="row match-height">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title" id="basic-layout-form-center">Add Category Form</h2>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                        <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body collapse in">
                <div class="card-block">

                    <form class="form" action="" method="post">
                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <div class="form-body">
                                    <div class="card-block card-dashboard">
                                        <h2 align="center">
                                            <?php
                                            if (isset($message)) {
                                                echo $message;
                                                unset($message);
                                            }
                                            ?>
                                        </h2>
                                    </div>
                                    <div class="form-group">
                                        <label for="eventInput1">Category Name</label>
                                        <input type="text" id="eventInput1" class="form-control" placeholder="Category Name" name="category_name" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Category Name">
                                    </div>

                                    <div class="form-group">
                                        <label for="issueinput8">Category Description</label>
                                        <textarea id="issueinput8" rows="5" class="form-control" name="category_description" placeholder="Category Description" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Category Description"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="issueinput6">Publication Status</label>
                                        <select id="issueinput6" name="publication_status" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Publication_status">
                                            <option value="">-- Select Publication_status --</option>
                                            <option value="1">Published</option>
                                            <option value="0">Unpublished</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="form-actions center">
                            <button name="btn" type="submit" class="btn btn-primary">
                                <i class="icon-check2"></i> Save Category
                            </button>
                            <button name="btn" type="reset" class="btn btn-warning mr-1">
                                <i class="icon-cross2"></i> Reset
                            </button>

                        </div>
                    </form>	

                </div>
            </div>
        </div>
    </div>
</div>

