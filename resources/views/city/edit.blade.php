@extends('template.master')
@section('tittle', 'Edit city')

@section('content')
<section class="content-wrapper">
    <!-- Content Header (Page header) -->
    {{-- <h2>halaman tambah city</h2> --}}
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">City</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href=" {{url('/city')}} ">City</a></li>
                        <li class="breadcrumb-item active">Edit City</li>
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
                  <h3 class="card-title">Edit <strong> City</strong></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{url('/city/'. $city->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="card-body">
                      <div class="form-group">
                        <label for="state">City State</label>
                        <select name="state" class="form-control @error('state') is-invalid @enderror"
                            id="state" value="{{ old('state') }}"
                            placeholder="Enter city State">
                            @foreach ($state as $item)
                                <option value="{{ $item->id }}"> {{ $item->nama }}</option>
                            @endforeach
                        </select>
                        @error('state')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="kota">City Name</label>
                      <input type="text" name="kota" class="form-control @error('kota') is-invalid @enderror" id="kota" placeholder="Edit New city" value="{{$city->city}}">
                      @error('kota')
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