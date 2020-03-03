@include('layouts.header')
<section class="text-center" style="padding-top: 80px;">
<div class="container">
  <div class="row">
             
        
          
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Serial no</th>
                  
                  
                  
                  <th>Description</th>
                  <th>Image</th>
                  <th>Price</th>
                  
                  
                  
                </tr>
                </thead>
                <tbody>
                  @foreach($search_brand as $search_brand)
                <tr>
                  <td>{{$search_brand->id}}</td>
                  <td>{{$search_brand->description}}</td>
                  <td><img src="{{ asset('img/'.$search_brand->img) }}" width="90" height="70"></td>
                  <td>{{$search_brand->price}}</td>
                                   
                 
                </tr>
                @endforeach
                </tbody>
               
              </table>
      </div></div>
  </section>
  @include('layouts.footer')
