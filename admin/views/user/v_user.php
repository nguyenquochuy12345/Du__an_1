
<div id="main-wrapper">
    <div class="content-heading text-center" style="margin-right: 53%">
        <button  style="margin: auto" class="btn btn-default" onclick="">Quay lại </button>
        <button  style="margin:auto" class="btn btn-default" onclick="window.location.href='addteacher.php'" id="" onclick="">Thêm </button>
    </div>
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">


                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Basic Datatable</h5>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>

                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Date</th>
                                        <th>Role</th>
                                        <th style="">Hành động</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($users as $tc) {
                                        ?>
                                        <tr>

                                            <td><?php echo $tc->Email; ?></td>
                                            <td><?php echo $tc->Password;?></td>
                                            <td><?php echo $tc->Date; ?></td>
                                            <td><?php echo $tc->Role; ?></td>

                                            <td>
                                                <button type="submit" id="sua_danh_gia" class="btn btn-info"
                                                        onclick="window.location.href='' ">
                                                    Sửa
                                                </button>
                                            </td>

                                        </tr>
                                        <?php
                                    }
                                    ?>

                                    </tbody>

                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
            All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>