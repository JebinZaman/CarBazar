 @include('admin.header')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Cars</h1>
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
              <form action="{{route('car.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="brand">Car Brand</label>
                    <select name="brand" id="brand" class="form-control">
                      <option>Select Brand</option>
                      @foreach($brand as $bn)
                      <option value="{{$bn->id}}">{{$bn->brand}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="model">Car Model</label>
                     <select name="car_model" id="car_model" class="form-control">
                      <option>Select Model</option>
                      @foreach($car_model as $car_mdl)
                      <option value="{{$car_mdl->car_model}}">{{$car_mdl->car_model}}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="color">Car color</label>
                    <select name="color" id="color" class="form-control">
                      <option>Select Color</option>
                      @foreach($color as $clr)
                      <option value="{{$clr->color}}">{{$clr->color}}</option>
                      @endforeach
                    </select>
                  </div>

                     <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description" rows="3" placeholder="Enter ..."></textarea>
                      </div>

                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="img" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="model">Price</label>
                    <input name="price" type="number" class="form-control" id="model" placeholder="Car Model">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
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