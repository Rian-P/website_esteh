@include('landing.dashboardLayouts.headerdash')
 @include('landing.dashboardLayouts.navbardash')
@include('landing.dashboardLayouts.sidebar')

@include('vendor.sweetalert.alert')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-3">
          <div class="col-sm-6">
            <h3 class="m-0">Tambah Data Intership</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href=""> <i class="fa-solid fa-backward"></i> Kembali</a></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- /Akhir content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-10 mx-auto">
            <div class="card ">
              <div class="card-header ">
                <h3 class="text-center">Input Data portfolio</h3>
              </div>
              <!-- form start -->
             <form action="/insertintership" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" required="required"  name="image">
                    <p class="fst-italic text-secondary">Note : size foto maksimal 2 mb dan extensi jpg, png, jpeg</p>
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" placeholder="Nama" required="required" name="nama">
                  </div>
                  <div class="form-group">
                    <label for="jobs">Jobs</label>
                    <input type="text" class="form-control" placeholder="Jobs" required="required" name="jobs">
                  </div>
                  <div class="">
                    <button type="submit" class="btn btn-success " value="Simpan Data">Simpan</button>
                  </div>
                </div>
              </form>
              <!-- Akhir form -->
            </div>
        </div>
      </div>
    </section>
    <!-- /Akhir main content -->

</div>

@include('landing.footerdash')