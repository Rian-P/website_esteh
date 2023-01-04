@include('landing.dashboardLayouts.headerdash')

@include('landing.dashboardLayouts.navbardash')

@include('landing.dashboardLayouts.sidebar')


<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-3">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Data Portfolio</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <a href="{{ route('viewportfolio') }}"><- Kembali</a>
              </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /Akhir content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header">
                <h3 class="text-center">Edit Data Portfolio</h3>
              </div>
              <!-- form start -->
              <form action="{{url('/updateportfolio/'.$data->id)}}" method="POST">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="portfolio">Portfolio</label>
                    <input type="file" class="form-control" id="file"  name="portfolio">
                    <img src="{{asset('storage/image/portfolio/'.$data->portfolio)}}" alt="Gambar" width="50px" height="50px">

                  </div>
                  <div class="form-group">
                    <label for="keterangan">Category</label>
                    <input type="tittle" class="form-control" id="tittle" placeholder="ini Category" name="keterangan" value="{{$data->keterangan}}">
                  </div>
                  <div class="">
                    <button type="submit" class="btn btn-success btn-lg btn-block" value="Submit">Simpan</button>
                  </div>
                </div>
              </form>
              <!-- Akhir form -->
            </div>
        </div>
      </div>
    </div>
    <!-- /Akhir main content -->

</div>

{{-- @include('landing.dashboardLayouts.footerdash') --}}