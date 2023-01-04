@include('landing.headerdash')

@include('landing.navbardash')

@include('landing.sidebar')


<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-3">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Data Portfolio</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('updateportfolio.index') }}"><- Kembali</a></li>
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
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header">
                <h3 class="text-center">Input Data Portfolio</h3>
              </div>
              <!-- form start -->
              <form  action="{{{ route('insertPortfolio') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}>
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">image</label>
                    <input type="file" class="form-control" id="file"  name="Nama">
                  </div>
                  <div class="form-group">
                    <label for="gambar">Category</label>
                    <input type="tittle" class="form-control" id="tittle" placeholder="ini Category" name=" title">
                  </div>
                  <div>
                    <button type="submit" class="btn btn-success btn-lg btn-block" value="Submit">Simpan</button>
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