<!-- Content Header (Page header) -->
  <section class="content-header">
      <h1>
        <?php echo $this->lang->line('permission_denied'); ?>
      </h1>
      <?php echo $this->breadcrumbs->show(); ?> 
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="error-page">
        <!-- <h2 class="headline text-red">500</h2> -->

        <div class="error-content">
          <h3><i class="fa fa-warning text-red"></i><?php echo $this->lang->line('oops_something_went_wrong'); ?></h3>

          <!-- <p>
            We will work on fixing that right away.
            Meanwhile, you may <a href="../../index.html">return to dashboard</a> or try using the search form.
          </p> -->

          <!-- <form class="search-form">
            <div class="input-group">
              <input type="text" name="search" class="form-control" placeholder="Search">

              <div class="input-group-btn">
                <button type="submit" name="submit" class="btn btn-danger btn-flat"><i class="fa fa-search"></i>
                </button>
              </div>
            </div>
          </form> -->
        </div>
      </div>
      <!-- /.error-page -->

    </section>
    <!-- /.content -->