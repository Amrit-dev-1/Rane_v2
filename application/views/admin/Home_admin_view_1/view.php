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
                    <a href="<?php echo base_url() ?>admin/Home_Admin_1/add/">
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


                        <th>Desktop Banner 1 </th>
                        <th>Desktop Banner 2 </th>
                        <th>Desktop Banner 3 </th>
                        <th>Desktop Banner 4 </th>
                        <th>Desktop Banner 5 </th>

                        <th>Mobile Banner 1</th>
                        <th>Mobile Banner 2</th>
                        <th>Mobile Banner 3</th>
                        <th>Mobile Banner 4</th>
                        <th>Mobile Banner 5</th>


                        <th>Survey Icon 1</th>
                        <th>Survey Icon 2</th>
                        <th>Survey Icon 3</th>
                        <th>Survey Icon 4</th>
                        <th>Survey Icon 5</th>

                        <th>Survey Description 1</th>
                        <th>Survey Description 2</th>
                        <th>Survey Description 3</th>
                        <th>Survey Description 4</th>
                        <th>Survey Description 5</th>
                        <th></th>






                        <!-- Include other table headers here -->
                      </tr>
                    </thead>
                    <tbody>



                      <?php if (!empty($Banner)) : ?>
                        <?php foreach ($Banner as $banner_item) : ?>
                          <tr>
                            <?php for ($i = 1; $i <= 5; $i++) : ?>
                              <td>
                                <?php $desktop_banner = 'desktop_banner_' . $i; ?>
                                <?php if (!empty($banner_item[$desktop_banner])) : ?>
                                  <img src="<?php echo base_url($banner_item[$desktop_banner]); ?>" class="img-fluid admin-img" alt="Desktop Banner <?php echo $i; ?>">
                                <?php endif; ?>
                              </td>
                            <?php endfor; ?>

                            <?php for ($i = 1; $i <= 5; $i++) : ?>
                              <td>
                                <?php $mobile_banner = 'Mobile_banner_' . $i; ?>
                                <?php if (!empty($banner_item[$mobile_banner])) : ?>
                                  <img src="<?php echo base_url($banner_item[$mobile_banner]); ?>" class="img-fluid admin-img" alt="Mobile Banner <?php echo $i; ?>">
                                <?php endif; ?>
                              </td>
                            <?php endfor; ?>

                            <?php for ($i = 1; $i <= 5; $i++) : ?>
                              <td>
                                <?php $survey_icon = 'Survey_icon_' . $i; ?>
                                <?php if (!empty($banner_item[$survey_icon])) : ?>
                                  <img src="<?php echo base_url($banner_item[$survey_icon]); ?>" class="img-fluid admin-img" alt="Survey Icon <?php echo $i; ?>">
                                <?php endif; ?>
                              </td>
                            <?php endfor; ?>

                            <?php for ($i = 1; $i <= 5; $i++) : ?>
                              <td>
                                <?php $Survey_desc_ = 'Survey_desc_' . $i; ?>
                                <?php echo $banner_item[$Survey_desc_] ?? ''; ?>
                              </td>
                            <?php endfor; ?>

                            <td>
                              <a href="<?php echo base_url('admin/Home_Admin_1/edit/' . $banner_item['ID']); ?>" class="btn btn-info">Edit</a>
                              <a href="<?php echo base_url('admin/Home_Admin_1/delete/' . $banner_item['ID']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this data?');">Delete</a>
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
  
  <?php $this->load->view('admin/layout/script'); ?>