<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-left">
            <li class="breadcrumb-item"><a href="#" class="text-dark text-custom-1 invesctor12"> <img src="../../dist/img/new/investor-breadcum.svg"> Investors </a></li>
          </ol>
        </div><!-- /.col -->

      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- content-header -->

  <section class="content">
    <div class="container-fluid">

      <div class="row mb-4">
        <div class="col-md-12">

          <div class="row  bg-white our-shadow p-3">
            <div class="col-sm-6">
              <div class="autocomplete">
                <div class="input-group">
                  <div class="searchItems"></div>
                  <input type="search" placeholder="Type to filter result.." class="filter-search" id="searchIndicators" autocomplete="off">
                </div>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="float-sm-right">
                <a onclick="clearFilters();" class="btn-clear-section-1 our-trans-btn" style="cursor: pointer;"> <img src="../../dist/img/new/reload.svg"> Clear All </a>
                <a href="#" class="btn-clear-section-1 our-border-btn" data-toggle="modal" data-target="#advancedFilters"> <img src="../../dist/img/new/advance-filter.svg"> Advanced Filters </a>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="row itemsList">
      </div>

      <div class="row">
        <center>
          <ul class="pagination paginationList">
          </ul>
        </center>
      </div>

    </div><!-- container-fluid -->
  </section>
  <!-- content -->
</div>
<!-- content-wrapper -->
