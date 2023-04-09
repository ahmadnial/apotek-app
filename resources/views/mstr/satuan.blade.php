@extends('layout.master')

@section('konten')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    {{-- <h5 class="m-0">Sugeng Rawuh</h5> --}}
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Soon</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card mt-2">
            <div class="card-body">
                <button type="button" class="btn btn-success mb-3" data-toggle="modal"
                    data-target="#exampleModalLong">Add Satuan</button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Satuan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="{{route('addSat')}}">
                                    @csrf
                                    <label for="">Kode Satuan</label>
                                    <input type="text" placeholder="Otomatis" class="form-control" name="kd" id="">

                                    <div class="mt-2">
                                        <label for="">Nama</label>
                                        <input type="text" placeholder="Nama Satuan" class="form-control"
                                            name="Nama_Satuan" id="">
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>


                <table class="table table-stripped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Satuan</th>
                            <th>Nama Satuan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>
                        @foreach ($data as $x)
                        <tr>
                            <td>
                                <?= $no++ ?>
                            </td>
                            <td>{{$x->Kode_Suplier}}</td>
                            <td>{{$x->Nama_Satuan}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- <div class="float-right">
                    {!! $data->links() !!}
                </div> --}}
            </div>
        </div>
    </div>

    @endsection