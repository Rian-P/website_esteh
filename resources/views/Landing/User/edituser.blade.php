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
            <h3 class="m-0">Tambah Data edit</h3>
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
                <h3 class="text-center">Input Data users</h3>
              </div>
              <!-- form start -->
             <form action="/update/{{$data->id_user}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="text" class="form-control" placeholder="Email" required="required" name="Email" value="{{$data->email}}">
                  </div>
                  <div class="form-group">
                    <label for="Username">Username</label>
                    <input type="text" class="form-control" placeholder="Username" required="required" name="Username" value="{{$data->username}}">
                  </div>
                  <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="text" class="form-control" placeholder="Password" required="required" name="Password" value="{{$data->password}}">
                  </div>
                  <div class="form-group">
                    <label for="Role">Role</label>
                    <input type="Role" class="form-control" placeholder="Role" required="required" name="Role" value="{{$data->role}}">
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