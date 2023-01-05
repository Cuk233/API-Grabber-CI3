<!-- Main Content -->
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <?php foreach ($aircraft_data as $data) : ?>
            <?php if ($data['status'] == "OPEN" || "PRGS") : ?>
                <?php $hangar = explode(" ", $data['hangar_location']);
                // echo $test[0]; // piece1
                //  echo $test[1]; // piece2 
                ?>
                <div class="modal fade" id="a<?php echo $data['revision_number'] ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo  $data['ac_reg'] ?>Label" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Details <?php echo $hangar[2] ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <table class="table table-borderless table-responsive shadow p-3 mb-5" id="datatables">
                                    <thead class="thead-blue">
                                        <tr>
                                            <!-- <th>ID</th> -->
                                            <th class="test">Revision Number</th>
                                            <th>Maintenance Type</th>
                                            <th>Ac Reg</th>
                                            <th>Aircraft Type</th>
                                            <th>Engine Type</th>
                                            <th>Customer</th>
                                            <th>Date in</th>
                                            <th>Date Out</th>
                                            <th>Status</th>
                                            <th>Project Owner</th>
                                            <th>Hangar Location</th>
                                            <!-- <th>Created at</th>
			<th>Updated at</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!-- <td><?php echo $data['id']; ?></td> -->
                                            <td><?php echo $data['revision_number']; ?></td>
                                            <td><?php echo $data['maintenance_type']; ?></td>
                                            <td><?php echo $data['ac_reg']; ?></td>
                                            <td><?php echo $data['name']; ?></td>
                                            <td><?php echo $data['engine_type']; ?></td>
                                            <td><?php echo $data['customer']; ?></td>
                                            <td><?php echo $data['date_in']; ?></td>
                                            <td><?php echo $data['date_out']; ?></td>
                                            <td><?php echo $data['status']; ?></td>
                                            <td><?php echo $data['project_owner']; ?></td>
                                            <td><?php echo $data['hangar_location']; ?></td>
                                            <!-- <td><?php echo $data['created_at']; ?></td>
				<td><?php echo $data['updated_at']; ?></td> -->
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach ?>
        <div class="container text-center my-5">
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Content Row -->
        <hr class="sidebar-divider my-0">
        <!-- <div class="d-sm-flex">
                <img src="assets\images\Artboard 1.png" class="img-fluid" alt="bg">
            </div> -->
        <div class="container text-center my-3">
            <div class="row mx-auto my-auto thl">
                <div id="myCarousel" class="carousel slide w-100 ">
                    <div class="carousel-inner" role="listbox">

                        <?php $intHangar1 = count($getHangar1) - 1; ?>

                        <?php for ($i = 0; $i <= $intHangar1; $i++) { ?>
                            <?php if ($i == 0) : ?>
                                <div class="carousel-item py-5 active">
                                    <div class="container">
                                        <div class="row">
                                        <?php endif; ?>

                                        <?php if (isset($getHangar1[$i]['status']) == "OPEN" || "PRGS") : ?>
                                            <div class="col-sm-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title"><?php print $getHangar1[$i]['hangar_location'] ?></h4>
                                                        <hr>
                                                        <input type="image" src="<?php print base_url('assets\images\aircraft_logo\737_logo.png'); ?>" name="saveForm" class="img-fluid btTxt submit" data-toggle="modal" data-target="#<?php print "a" . $getHangar1[$i]['revision_number'] ?>" style="transform: rotate(-90deg)" id="saveForm" />
                                                    </div>
                                                </div>
                                                <br><br>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (0 == $getHangar1[$i]) : ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php   }  ?>

                        <?php $intHangar3 = count($getHangar3) - 1; ?>

                        <?php for ($i = 0; $i <= $intHangar3; $i++) { ?>
                            <?php if ($i == 0) : ?>

                                <div class="container">
                                    <div class="row">
                                    <?php endif; ?>

                                    <?php if (isset($getHangar3[$i]['status']) == "OPEN" || "PRGS") : ?>
                                        <div class="col-sm-2">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title"><?php print $getHangar3[$i]['hangar_location'] ?></h4>
                                                    <hr>
                                                    <input type="image" src="<?php print base_url('assets\images\aircraft_logo\737_logo.png'); ?>" name="saveForm" class="img-fluid btTxt submit" data-toggle="modal" data-target="#<?php print "a" . $getHangar3[$i]['revision_number'] ?>" style="transform: rotate(-90deg)" id="saveForm" />
                                                </div>
                                            </div> <br><br>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (0 == $getHangar3[$i]) : ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php   }  ?>
                    </div>

                    <?php $intHangar4 = count($getHangar4) - 1; ?>
                    <?php for ($i = 0; $i <= $intHangar4; $i++) { ?>
                        <?php if ($i == 0) : ?>

                            <div class="container">
                                <div class="row">
                                <?php endif; ?>

                                <?php if ($getHangar4[$i]['status'] == "OPEN" || "PRGS") : ?>
                                    <div class="col-sm-2">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title"><?php print $getHangar4[$i]['hangar_location'] ?></h4>
                                                <hr>
                                                <input type="image" src="<?php print base_url('assets\images\aircraft_logo\737_logo.png'); ?>" name="saveForm" class="img-fluid btTxt submit" data-toggle="modal" data-target="#<?php print "a" . $getHangar4[$i]['revision_number'] ?>" style="transform: rotate(-90deg)" id="saveForm" />
                                            </div>
                                        </div> <br><br>
                                    </div>
                                <?php endif; ?>
                                <?php if (0 == $getHangar4[$i]) : ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php   }  ?>
                </div>


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white shadow mb-4">
            <div class="container my-auto ">
                <div class="copyright text-center my-auto">
                    <span>Powered by SB Admin 2</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>