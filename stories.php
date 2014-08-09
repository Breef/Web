<?php include("header.php"); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Stories
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Stories
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                        <form role="form">

                            <div class="form-group">
							<label>Story title</label>
                                <input class="form-control" placeholder="">
                            </div>
							
							<div class="form-group">
								<label>Snippet information</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
							
							<div class="form-group">
								<label>Image link</label>
                                <input class="form-control" placeholder="">
                            </div>

                            <div class="form-group">
                                <label>Categories</label>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">Checkbox 1
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">Checkbox 2
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">Checkbox 3
                                    </label>
                                </div>
                            </div>
							
							<div class="form-group">
								<label>Created at</label>
                                <input class="form-control" placeholder="">
                            </div>
							
							<div class="form-group">
								<label>Publish at</label>
                                <input class="form-control" placeholder="">
                            </div>

                            <button type="submit" class="btn btn-default">Submit Button</button>
                            <button type="reset" class="btn btn-default">Reset Button</button>

                        </form>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
		
<?php include("footer.php"); ?>