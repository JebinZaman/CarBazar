
 @include('admin.header')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Model</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Add Model</li>
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
                <h3 class="card-title">Car Model</h3>
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
                  <th>Model</th>
                  <th>Action</th>
                  
                  
                </tr>
                </thead>
                <tbody>
                	@foreach($car_models as $car_model)
                <tr>
                  <td>{{$car_model->id}}</td>
                  <td>{{$car_model->car_model}}</td>
                  <td>
                    <a href="{{route('model.edit',[$car_model->id])}}">
                    <button class="btn btn-outline-danger">Edit</button>
                  </a>
                  <a href="{{route('model.delete',[$car_model->id])}}">
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