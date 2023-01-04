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
            <span class="m-0">Edit Data Blog</span>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
				        <a href="{{ route('viewblog') }}"><- Kembali</a>
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
          <div class="col-md-10 mx-auto ">
            <div class="card ">
              <div class="card-header">
                <h3 class="text-center fs-6">Edit Data Blog</h3>
              </div>
              <!-- form start -->
             
              <form action="{{ url('/viewblog/update/'.$blog->id) }}" method="post" enctype="multipart/form-data">
              @csrf
              @method('put')
            
                <div class="card-body">
                <input type="hidden" name="id" id="id" value="{{ $blog->id }}">
                <div class="form-group">
                  <label for="image">image</label>
                  <input type="file" class="form-control" value="{{ $blog->image}}"  name="image">
                  <p class="fst-italic text-secondary">size foto maksimal 2 mb dan extensi jpg, png, jpeg</p>
                </div>
                <div class="form-group">
                  <label for="jobs">jobs</label>
                  <input type="text" class="form-control"  placeholder="Masukan Jobs" value="{{ $blog->jobs}}" name="jobs">
                </div>
                <div class="form-group">
                  <label for="gambar">title</label>
                  <input type="text" class="form-control"  placeholder="Masukan tittle" value="{{ $blog->title}}" name="title">
                </div>
               
                <div class="form-group">
                  <label for="desc">description</label>
                  <input id="description" type="hidden" name="description" value="{{ $blog->description}}">
                  <trix-editor input="description"></trix-editor>
                </div>
                
                <div class="">
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