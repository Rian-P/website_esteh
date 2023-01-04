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
            <h3 class="m-0">Tambah Data Team</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('updateteam.index') }}"> <i class="fa-solid fa-backward"></i> Kembali</a></li>
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
                <h3 class="text-center">Input Data Team</h3>
              </div>
              <!-- form start -->
              <form action="{{ route('tambahteam.index') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="image">image</label>
                    <input type="file" class="form-control" required="required"  name="image">
                    <p class="fst-italic text-secondary">Note : size foto maksimal 2 mb dan extensi jpg, png, jpeg</p>
                  </div>
                  <div class="form-group">
                    <label for="Nama">Nama</label>
                    <input type="text" class="form-control" placeholder="Masukan Nama" required="required" name="name">
                  </div>
                  <div class="form-group">
                    <label for="title">Tittle</label>
                    <input type="text" class="form-control"required="required" placeholder="Masukan tittle" name="title">
                  </div>
                  <div class="form-group">
                    <label for="pendidikan">pendidikan</label>
                    <input type="text" class="form-control"required="required" placeholder="Masukan pendidikan" name="pendidikan">
                  </div>
                  <div class="form-group">
                    <label for="jabatan">jabatan</label>
                    <input type="text" class="form-control"required="required" placeholder="Masukan pendidikan" name="jabatan">
                  </div>
                  <div class="form-group">
                    <label for="keterangan1">keterangan1</label>
                    <input type="text" class="form-control"required="required" placeholder="Masukan pendidikan" name="keterangan1">
                  </div>
                  <div class="form-group">
                    <label for="keterangan2">keterangan2</label>
                    <input type="text" class="form-control"required="required" placeholder="Masukan pendidikan" name="keterangan2">
                  </div>
                  <div class="form-group">
                    <label for="keterangan3">keterangan3</label>
                    <input type="text" class="form-control"required="required" placeholder="Masukan pendidikan" name="keterangan3">
                  </div>
                  <div class="form-group">
                    <label for="image1">image</label>
                    <input type="file" class="form-control" required="required"  name="image1">
                    <p class="fst-italic text-secondary">Note : size foto maksimal 2 mb dan extensi jpg, png, jpeg</p>
                  </div>
                  <div class="form-group">
                    <label for="image2">image</label>
                    <input type="file" class="form-control" required="required"  name="image2">
                    <p class="fst-italic text-secondary">Note : size foto maksimal 2 mb dan extensi jpg, png, jpeg</p>
                  </div>
                  <div class="form-group">
                    <label for="image3">image</label>
                    <input type="file" class="form-control" required="required"  name="image3">
                    <p class="fst-italic text-secondary">Note : size foto maksimal 2 mb dan extensi jpg, png, jpeg</p>
                  </div>
                  <div class="form-group">
                    <label for="Facebook">Facebook</label>
                    <input type="text" class="form-control" required="required" placeholder="Masukan Facebook"  name="facebook">
                  </div>
                  <div class="form-group">
                    <label for="Twitter">Twitter</label>
                    <input type="text" class="form-control" required="required" placeholder="Masukan Twitter"  name="twitter">
                  </div>
                  <div class="form-group">
                    <label for="LinkedIn">LinkedIn</label>
                    <input type="text" class="form-control" required="required" placeholder="Masukan LinkedIn"  name="linkedin">
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