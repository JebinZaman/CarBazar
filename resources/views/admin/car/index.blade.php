 @include('admin.header')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Car</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Car</li>
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
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Car Brand</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Serial no</th>
                  <th>Brand</th>
                  <th>Model</th>
                  <th>Color</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Price</th>
                  <th>Action</th>
                  
                  
                </tr>
                </thead>
                <tbody>
                	@foreach($cars as $car)
                <tr>
                  <td>{{$car->id}}</td>
                  <td>{{$car->brands->brand}}</td>
                  <td>{{$car->car_models->car_model}}</td>
                  <td>{{$car->colors->color}}</td>
                  <td>{{$car->description}}</td>
                  <td><img src="{{ asset('img/'.$car->img) }}" width="90" height="70"></td>
                  <td>{{$car->price}}</td>
                  <td>
                    <a href="{{route('car.edit',[$car->id])}}">
                    <button class="btn btn-outline-danger">Edit</button>
                  </a>
                  <a href="{{route('car.delete',[$car->id])}}">
                    <button class="btn btn-outline-warning">Delete</button>
                  </a>
                  </td>                  
                 
                </tr>
                @endforeach
                </tbody>
               
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

         
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
         
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