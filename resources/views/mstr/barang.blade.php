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
                    data-target="#exampleModalLong">Add Barang</button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Barang / Obat</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                {{-- <form method="post" action="{{route('addSup')}}">
                                    @csrf --}}
                                    <label for="">Kode</label>
                                    <input type="text" placeholder="Kode_Suplier" class="form-control" name="kd" id="">

                                    <div class="mt-2">
                                        <label for="">Nama</label>
                                        <input type="text" placeholder="Nama Suplier" class="form-control"
                                            name="Nama_Suplier" id="">
                                    </div>
                                    <div class="mt-2">
                                        <label for="">Alamat</label>
                                        <textarea name="alamat" id="" cols="10" rows="5"
                                            class="form-control"></textarea>
                                    </div>
                                    <div class="mt-2">
                                        <label for="">Kota</label>
                                        <input type="text" value="" placeholder="Kota_Suplier" class="form-control"
                                            name="Kota_Suplier" id="">
                                    </div>
                                    <div class="mt-2">
                                        <label for="">Provinsi</label>
                                        <input type="text" value="" placeholder="Provinsi_Suplier" class="form-control"
                                            name="Provinsi_Suplier" id="">
                                    </div>
                                    <div class="mt-2">
                                        <label for="">Kode POS</label>
                                        <input type="text" value="" placeholder="Kode_POS_Suplier" class="form-control"
                                            name="Kode_POS_Suplier" id="">
                                    </div>
                                    <div class="mt-2">
                                        <label for="">Email</label>
                                        <input type="text" value="" placeholder="Email_Suplier" class="form-control"
                                            name="Email_Suplier" id="">
                                    </div>
                                    <div class="mt-2">
                                        <label for="">No. HP</label>
                                        <input type="text" value="" placeholder="No_HP_Suplier" class="form-control"
                                            name="No_HP_Suplier" id="">
                                    </div>
                                    <div class="mt-2">
                                        <label for="">NPWP</label>
                                        <input type="text" value="" placeholder="NPWP_Suplier" class="form-control"
                                            name="NPWP_Suplier" id="">
                                    </div>

                                    <input type="hidden" name="petugas" value="Masih Kosong">

                                    {{-- <button type="submit" class="btn btn-success float-right mt-3">Simpan</button>
                                    --}}
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
                            <th>kd distri</th>
                            <th>Nama</th>
                            <th>alamat</th>
                            <th>Kota</th>
                            <th>Provinsi</th>
                            <th>Kode POS</th>
                            <th>Email</th>
                            <th>No.HP</th>
                            <th>NPWP</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($data as $x) --}}
                        <tr>
                            {{-- <td>{{$x->Kode_Suplier}}</td>
                            <td>{{$x->Nama_Suplier}}</td>
                            <td>{{$x->alamat}}</td>
                            <td>{{$x->Kota_Suplier}}</td>
                            <td>{{$x->Provinsi_Suplier}}</td>
                            <td>{{$x->Kode_POS_Suplier}}</td>
                            <td>{{$x->Email_Suplier}}</td>
                            <td>{{$x->No_HP_Suplier}}</td>
                            <td>{{$x->NPWP_Suplier}}</td>
                        </tr> --}}
                        {{-- @endforeach --}}
                    </tbody>
                </table>
                {{-- <div class="float-right">
                    {!! $data->links() !!}
                </div> --}}
            </div>
        </div>
    </div>

    @endsection