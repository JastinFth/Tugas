@extends("template")

@section("title")
<br>
Data Destinasi
@endsection

@section("content")
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');
    .btn {
        font-family: 'Poppins', sans-serif;
    }
</style>
<div class="container">
    <hr>
    <a href="{{ url ('form-tambah')}}" class="btn btn-success">Tambah</a>
    <table class="table table-bordered table-striped mt-5">
        <thead>
            <tr>
                <th class="text-center">NO</th>
                <th class="text-center">Name</th>
                <th class="text-center">location</th>
                <th class="text-center">Day Open</th>
                <th class="text-center">Time Open</th>
                <th class="text-center">Price</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 0;
            ?>
            @foreach($destinations as $data)
            <?php $no++?>
            <tr>
                <td class="text-center">{{$no}}</td>
                <td class="text-center">{{$data->name}}</td>
                <td class="text-center">{{$data->location}}</td>
                <td class="text-center">{{$data->day_open}}</td>
                <td class="text-center">{{$data->time_open}}</td>
                <td class="text-center">{{$data->price}}</td>
                <td class="text-center">
                    <a href="{{ url('destinations-data/'.$data->id.'/edit')}}" class="btn btn-sm btn-primary ">Edit</a>
                    <a href="{{ url('destinations-data/'.$data->id.'/delete')}}" onclick="return confirm('Yakin hapus {{$data->name}}?')" class="btn btn-sm btn-danger">
                        Hapus
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div><br><br>
<footer class="footer bg-900 py-5 text-white fixed">
    <div class="container mt-3">
      <div class="row">
        <div class="col text-center">
            <p>&copy; 2023 Your Company. All rights reserved.</p>
            <p class="pt-4 mb-3 mb-0 text-700">Powered by <a class="text-700 text-decoration-none" href="#!"><span class="border-bottom border-800 border-2x" style="line-height:10px;margin-bottom:10px"> M.N.F</span></a></p>
        </div>
        </div>
    </div><!-- end of .container-->
</footer>
    
@endsection
