@include('landing.dashboardLayouts.headerdash')
 @include('landing.dashboardLayouts.navbardash')
@include('landing.dashboardLayouts.sidebar')

@include('vendor.sweetalert.alert')

  <!-- Content Wrapper. -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Internship/Magang</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <h3 class="text-center pt-3">Data Internship</h3>              
              <!-- /.card-header -->
              <div class="pt-3 flex items-center ">
                  <a href="/formintership"><button type="submit" class="btn btn-success   flex" value="Submit">Tambah Internship </button></a>
                  <a href=""><button type="submit" class="btn btn-success   flex" value="Submit">View Team</button></a>
                </div>
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr class="text-center" >
                      <th>Image</th>
                      <th>Nama</th>
                      <th>Jobs</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($internship as $p)
                    <tr class="text-center">
                      <td>
                        <img
                            src="{{asset('storage/image/intership/'.$p->image)}}"
                            alt=""
                            style="width: 100px"/>
                      </td>                       
                      <td>{{ $p->nama }}</td>                                          
                      <td>{{ $p->jobs }}</td>                                          
                      <td>
                        <div class="items-center">
                          <a href="/editintership/{id}"><button type="button" class="btn btn-warning text-white" >Edit</button></a>
                          
                          <a href="/delete/{id}"><button type="button" class="btn btn-danger " value="Submit">Hapus</button></a>
                        </div>
                      </td>                       
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
        </div>
      </div>
    </section>

  </div>
    <!--Akhir Content Wrapper. -->


@include('landing.dashboardLayouts.footerdash')
