@extends('template.master')
@section('tittle', 'Edit State')

@section('content')
<section class="content-wrapper">
    <!-- Content Header (Page header) -->
    {{-- <h2>halaman tambah state</h2> --}}
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">State</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href=" {{url('/state')}} ">State</a></li>
                        <li class="breadcrumb-item active">Edit State</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- jquery validation -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Edit <strong> State</strong></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{url('/state/'. $state->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="card-body">
                    <div class="form-group">
                      <label for="prov">State Name</label>
                      <input type="text" name="prov" class="form-control @error('prov') is-invalid @enderror" id="prov" placeholder="Edit New state" value="{{$state->state}}">
                      @error('prov')
                      <div class="invalid-feedback">
                        {{$message}}
                      </div>
                      @enderror
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
              </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">
  
            </div>
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    <!-- /.content-header -->
</section>
@endsection