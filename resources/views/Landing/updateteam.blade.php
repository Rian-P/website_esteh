@include('landing.dashboardLayouts.headerdash')
@include('landing.dashboardLayouts.navbardash')
@include('landing.dashboardLayouts.sidebar')

@include('vendor.sweetalert.alert')


  <!-- Content Wrapper. -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Team</h1>
          </div>
        </div>
      </div>
    </div> -->
    <!-- /.content-header -->
    
    <!-- Main content -->
    <section class="content mt-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="row mt-3 mx-3">
                <div class="col-sm-6">
                    <h3 class=" text-uppercase">Data Team</h3>
                </div>
                <div class="col-sm-6">
                  <div class=" float-sm-right">
                    <a href="{{ route('team.index') }}">
                      <button type="submit" class="btn btn-success   flex" >Tambah Team 
                      <i class="fa-solid fa-plus"></i> 
                      </button>
                    </a>
                    {{-- <a href="{{ route('team.index') }}">
                      <button type="submit" class="btn btn-success flex" >View team
                      <i class="fa-solid fa-eye"></i>
                      </button>
                    </a> --}}
                  </div>
                </div>
              </div>            
              <!-- /.card-header -->
              <div class="card-body table-responsive">
                <table class="table table-bordered">
                  <thead >
                    <tr class="text-center" >
                      <th>Image</th>
                      <th>Nama</th>
                      <th>Tittle</th>
                      <th>jabatan</th>
                      <th>pendidikan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  @foreach($team as $p)
                  <tbody>
                    <tr class="text-center text-break">
                      <td>
                        <img
                            src="{{asset('storage/image/team/'.$p->image)}}" alt=""  height="200px" width="200px" />
                            
                      </td>                     
                      <td>{{$p->name}}</td>                                          
                      <td>{{$p->title}}</td>                       
                      <td >{{$p->jabatan}}</td>                       
                      <td >{{$p->pendidikan}}</td> 
                                            
                                            
                      <td>
                        <div class="items-center btn-fluid">
                          <a href="/updateteam/edit/{{ $p->id }}">
                            <button type="button xl:mb-3" class="btn  btn-warning text-white" >
                            <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                          </a>
                          <a href="/updateteam/hapus/{{ $p->id }}">
                            <button type="button xl:mt-3" class="btn btn-danger ">
                            <i class="fa-solid fa-trash-can"></i>
                            </button>
                          </a>
                          <a href="{{ route('team.index') }}">
                            <button type="submit" class="btn btn-primary flex" >
                            <i class="fa-solid fa-eye"></i>
                            </button>
                          </a>
                        </div>
                      </td>                       
                    </tr>
                  </tbody>
                  @endforeach
                </table>
                <div class="pt-3 ">
                  {{ $team->links() }}
                </div>
                <!-- <div class="pt-3 flex items-center ">
                  <a href="{{ route('tambahteam.index') }}"><button type="submit" class="btn btn-success   flex" value="Submit">Tambah Team </button></a>
                  <a href="{{ route('team.index') }}"><button type="submit" class="btn btn-success   flex" value="Submit">View Team</button></a>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
  <!-- Akhir Content Wrapper. -->

@include('landing.dashboardLayouts.footerdash')