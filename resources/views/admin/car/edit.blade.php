 @include('admin.header')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Car</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Add Car</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-10">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Cars</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('car.update',[$car->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">


                  <!-- <div class="form-group">
                    <label for="brand">Car Brand</label>
                    <input value="{{$car->brand}}" name="brand" type="text" class="form-control" id="brand" placeholder="Car brand">
                  </div> -->

                  <div class="form-group">
                    <label for="brand">Car Brand</label>
                    <select name="brand" id="brand" class="form-control">
                      <option>Select Brand</option>
                      @foreach($brand as $bn)
                      <option value="{{$bn->id}}" {{$car->brand == $bn->id ? "selected" : "" }}>{{$bn->brand}}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="car_model">Car Model</label>
                    <select name="car_model" id="car_model" class="form-control">
                      <option>Select Brand</option>
                      @foreach($car_model as $bn)
                      <option value="{{$bn->id}}" {{$car->car_model == $bn->id ? "selected" : "" }}>{{$bn->car_model}}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="color">Car Color</label>
                    <select name="color" id="color" class="form-control">
                      <option>Select Brand</option>
                      @foreach($color as $bn)
                      <option value="{{$bn->id}}" {{$car->color == $bn->id ? "selected" : "" }}>{{$bn->color}}</option>
                      @endforeach
                    </select>
                  </div>
                 
                   <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" rows="3" class="form-control" id="description"  placeholder="Enter ...">
                          {{$car->description}}
                        </textarea>
                      </div>

                 <div class="form-group">
                    <label for="exampleInputFile">Images @if ($car->img)<img src="{{ asset('img/'.$car->img) }}" width="80">@endif</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <<input type="file" name="img" class="custom-file-input" id="exampleInputFile">
                        <input type="hidden" name="hidden_img" value="{{$car->img}}" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="price">Price</label>
                    <input name="price" value="{{$car->price}}" type="number" class="form-control" id="model" placeholder="Car Model">
                  </div>

                  <!-- <div class="form-group">
                    <label for="brand">Car Brand</label>
                    <input value="{{$car->brand}}" name="brand" type="text" class="form-control" id="brand" placeholder="Car brand">
                  </div> -->
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- Form Element sizes -->
          
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
 
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('admin.footer')