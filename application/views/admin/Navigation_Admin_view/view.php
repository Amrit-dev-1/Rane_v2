<?php $this->load->view('admin/layout/header'); ?>

<?php $this->load->view('admin/layout/sidebar'); ?>



<style>
  .admin-img {
    height: auto;
    width: 200px;
  }
</style>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <!-- Include your content header here -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Home Page</h3>
                  <div class="card-tools">
                    <a href="<?php echo base_url() ?>admin/Navigation_bar/add/">
                      <button type="button" class="btn btn-success">
                        <i class="fas fa-plus"></i> Add New
                      </button>
                    </a>
                  </div>
                </div>

                <div class="card-body">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th> Logo </th>
                        <th> Mega Menu Service Title</th>
                        <th> Mega Menu Service Description</th>
                        <th>Mega Menu Experties Title</th>
                        <th>Mega Menu Capabilities Title</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>




                      <?php if (!empty($Banner)) : ?>
                        <?php foreach ($Banner as $banner_item) : ?>
                          <tr>

                            <!-- <td><?php echo $banner_item['rane_icon']; ?></td> -->
                            
                            <td>
                              <img src="<?php echo base_url($banner_item['rane_icon']); ?>" class="img-fluid admin-img" alt="Logo">
                            </td>


                            <td><?php echo $banner_item['menu_service_title']; ?></td>
                            <td><?php echo $banner_item['menu_service_desc']; ?></td>
                            <td><?php echo $banner_item['Experties']; ?></td>
                            <td><?php echo $banner_item['Capabilities']; ?></td>



                            <td>
                              <a href="<?php echo base_url('admin/Navigation_bar/edit/' . $banner_item['id']); ?>" class="btn btn-info">Edit</a>

                              <a href="<?php echo base_url('admin/Navigation_bar/delete/' . $banner_item['id']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this data?')">Delete</a>
                            </td>
                          </tr>
                        <?php endforeach; ?>
                      <?php else : ?>
                        <tr>
                          <td colspan="20">No data found.</td>
                        </tr>
                      <?php endif; ?>




                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- /.content-wrapper -->
  </div>
  <!-- ./wrapper -->




  <?php $this->load->view('admin/layout/footer'); ?>
  </div>
  <!-- ./wrapper -->
  <?php $this->load->view('admin/layout/script'); ?>