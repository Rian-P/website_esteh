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
            <h3 class="m-0">Edit Data Team</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <a href="{{ route('updateteam.index') }}"><- Kembali</a>
              </li>
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
              <div class="card-header">
                <h3 class="text-center">Edit Data Team</h3>
              </div>
              <!-- form start -->
              <form action="{{ url('/updateteam/update/'.$team->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">
                <input type="hidden" name="id" value="{{ $team->id }}">
                  <div class="form-group">
                    <label for="nama">image</label>
                    <input type="file" class="form-control" value="{{ $team->image}}"  name="image">
                    <p class="fst-italic text-secondary">size foto maksimal 2 mb dan extensi jpg, png, jpeg</p>
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" value="{{ $team->name}}" name="name">
                  </div>
                  <div class="form-group">
                    <label for="tittle">Jobs</label>
                    <input type="text" class="form-control" value="{{ $team->title}}" name="title">
                  </div>
                  <div class="form-group">
                    <label for="pendidikan">pendidikan</label>
                    <input type="text" class="form-control" value="{{ $team->pendidikan}}" name="title">
                  </div>
                  <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" class="form-control" value="{{ $team->jabatan}}" name="title">
                  </div>
                  <div class="form-group">
                    <label for="keterangan1">keterangan1</label>
                    <input type="text" class="form-control" value="{{ $team->keterangan1}}" placeholder="Masukan pendidikan" name="keterangan1">
                  </div>
                  <div class="form-group">
                    <label for="keterangan2">keterangan2</label>
                    <input type="text" class="form-control" value="{{ $team->keterangan2}}"  placeholder="Masukan pendidikan" name="keterangan2">
                  </div>
                  <div class="form-group">
                    <label for="keterangan3">keterangan3</label>
                    <input type="text" class="form-control" value="{{ $team->keterangan3}}" placeholder="Masukan pendidikan" name="keterangan3">
                  </div>
                  <div class="form-group">
                    <label for="image1">image</label>
                    <input type="file" class="form-control"  value="{{ $team->image1}}" name="image1">
                    <p class="fst-italic text-secondary">Note : size foto maksimal 2 mb dan extensi jpg, png, jpeg</p>
                  </div>
                  <div class="form-group">
                    <label for="image2">image</label>
                    <input type="file" class="form-control"  value="{{ $team->image2}}" name="image2">
                    <p class="fst-italic text-secondary">Note : size foto maksimal 2 mb dan extensi jpg, png, jpeg</p>
                  </div>
                  <div class="form-group">
                    <label for="image3">image</label>
                    <input type="file" class="form-control"  value="{{ $team->image3}}"  name="image3">
                    <p class="fst-italic text-secondary">Note : size foto maksimal 2 mb dan extensi jpg, png, jpeg</p>
                  </div>
                  <div class="form-group">
                    <label for="facebook">Facebook</label>
                    <input type="text" class="form-control" value="{{ $team->facebook}}" name="facebook">
                  </div>
                  <div class="form-group">
                    <label for="Twitter">Twitter</label>
                    <input type="text" class="form-control" value="{{ $team->twitter}}" name="twitter">
                  </div>
                  <div class="form-group">
                    <label for="LinkedIn">LinkedIn</label>
                    <input type="text" class="form-control" value="{{ $team->linkedin}}" name="linkedin">
                  </div>
                  <div >
                    <button type="submit" class="btn btn-success" value="Simpan Data">Simpan</button>
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