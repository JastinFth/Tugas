@extends("template")

@section("title")
Destinations Data
@endsection

@section("content")

<a href="{{ url ('form-tambah')}}" class="btn btn-success">Tambah</a>
<hr>
<table class="table table-bordered table-striped">
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
            <td>{{$data->name}}</td>
            <td>{{$data->location}}</td>
            <td>{{$data->day_open}}</td>
            <td>{{$data->time_open}}</td>
            <td>{{$data->price}}</td>
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
@endsection
