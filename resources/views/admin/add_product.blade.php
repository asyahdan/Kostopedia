<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
        .div_deg{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top:60px;
        }

        h1{
           color:white; 
        }

        label
        {
            display:inline-block;
            width: 250px;
            font-size: 18px!important;
            color:white!important;

        }

        input[type='text']
        {
            width: 350px;
            height: 50px;
        }

        textarea
        {
            width: 450px;
            height: 80px;
        }

        .input_deg
        {
            padding:15px;
        }


    </style>
  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            
          <h1>Tambah Kontrakan</h1>

          <div class="div_deg">
            <form action ="{{url('upload_product')}}" method="Post" enctype="multipart/form-data">
                <div class="input_deg">
                    <label>Nama Kontrakan</label>
                    <input type="text" name="title" required>
                </div>
                @csrf

                <div class="input_deg">
                    <label>Nama pemiliik</label>
                    <input type="text" name="namapemilik" required>
                </div>

                <div class="input_deg">
                    <label>Deskripsi</label>
                    <textarea name="description" required></textarea>
                </div>

                <div class="input_deg">
                    <label>Ukuran Kamar</label>
                    <textarea name="ukurankamar" required></textarea>
                </div>

                <div class="input_deg">
                    <label>Harga</label>
                    <input type="text" name="price">
                </div>

                <div class="input_deg">
                    <label>beds</label>
                    <input type="number" name="beds">
                </div>

                <div class="input_deg">
                    <label>baths</label>
                    <input type="number" name="baths">
                </div>

                <div class="input_deg">
                    <label>phone</label>
                    <input type="number" name="phone">
                </div>

                <div class="input_deg">
                    <label>Kategori</label>
            <select name ="category" required>
                    <option>Select an Option</option>

                        
                @foreach($category as $category)
                        <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                @endforeach
            </select>
                </div>

                <div class="input_deg">
                    <label>Gambar Kontrakan</label>
                    <input type="file" name="image">
                </div>

                <div class="input_deg">
                    <input class ="btn btn-success"type="submit" value=
                    "Add Product">
                </div>
                    
            </form>

          </div>
        
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
  </body>
</html>