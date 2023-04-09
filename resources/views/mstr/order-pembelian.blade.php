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
    {{-- <div class="">
        <div class=""> --}}
            <div class="container">
                <div class="card-header">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 mt-3">
                                    <label for="">No. Ref</label>
                                    <input type="text" class="form-control" value="">
                                </div>
                                <div class="col-6 mt-3">
                                    <label for="">Lokasi Stock</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">SPLY1GUDANG</option>
                                        <option value="">SPLY1GUDANG</option>
                                        <option value="">SPLY1GUDANG</option>
                                        <option value="">SPLY1GUDANG</option>
                                        <option value="">SPLY1GUDANG</option>
                                    </select>
                                </div>
                                <div class="col-6 mt-3">
                                    <label for="">tanggal</label>
                                    <input type="date" class="form-control" value="">
                                </div>
                                <div class="col-6 mt-3">
                                    <label for="">Suplier</label>
                                    <select name="" id="" class="form-control">
                                        {{-- <option value="Choose">Choose</option>
                                        @foreach ($list as $x)
                                        <option value="{{$x->Nama_Suplier}}">{{$x->Nama_Suplier}}</option>
                                        @endforeach --}}
                                    </select>
                                </div>
                                <div class="col-3 mt-3">
                                    <label for="">No. PO</label>
                                    <input type="text" class="form-control" value="">
                                </div>
                                <div class="col-3 mt-3">
                                    <label for="">Tanggal PO</label>
                                    <input type="date" class="form-control" value="">
                                </div>
                                <div class="col-6 mt-3">
                                    <label for="">Pajak Pembelian</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Choose</option>
                                        <option value="">Tidak Ada</option>
                                        <option value="">10%</option>
                                        <option value="">11%</option>
                                    </select>
                                </div>
                                {{--
                            </div>
                        </div> --}}
                        <br>
                        <hr>

                        <h2 align="center">Item Pembelian</h2>

                        <form action="" method="POST">
                            @csrf

                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            @if (Session::has('success'))
                            <div class="alert alert-success text-center">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <p>{{ Session::get('success') }}</p>
                            </div>
                            @endif
                            <div style="overflow-x:auto;">
                                <table class="table table-bordered" id="dynamicTable">
                                    <tr>
                                        <th>kd Barang</th>
                                        <th>Nama Produk</th>
                                        <th>Satuan</th>
                                        <th>Qty</th>
                                        <th>Harga Satuan</th>
                                        <th>Jumlah</th>
                                        <th>Add</th>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="addmore[0][kd_barang]"
                                                placeholder="Enter your Name" class="form-control" />
                                        </td>
                                        <td>
                                            <select class="select_nm_brg form-control" name="addmore[0][Nama_Barang]"
                                                id="">
                                                <option value="">tes</option>
                                                <option value="">tes</option>
                                                <option value="">tes</option>
                                                <option value="">tes</option>
                                            </select>
                                            {{-- <input type="text" name="addmore[0][Nama_Barang]"
                                                placeholder="Enter your Qty" class="form-control" /> --}}
                                        </td>
                                        <td><input type="text" name="addmore[0][Satuan]" placeholder="Enter your Price"
                                                class="form-control" /></td>
                                        <td><input type="text" name="addmore[0][qty]" placeholder="Enter your Price"
                                                class="form-control" /></td>
                                        <td><input type="text" name="addmore[0][harga_satuan]"
                                                placeholder="Enter your Price" class="form-control" /></td>
                                        <td><input type="text" name="addmore[0][jumlah]" readonly
                                                class="form-control" />
                                        </td>

                                        <td><button type="button" name="add" id="add" class="btn btn-success">+</button>
                                        </td>
                                    </tr>

                                    {{-- @foreach($ProductStocks as $key => $value) --}}
                                    {{-- <tr> --}}
                                        {{-- {{ dd($ProductStocks) }} --}}
                                        {{-- <td><input type="text" value="" name="" placeholder="Enter your Name"
                                                class="form-control" /><input type="hidden" value="" name=""
                                                placeholder="Enter your Name" class="form-control" /></td>
                                        <td><input type="text" value="" name="" placeholder="Enter your Qty"
                                                class="form-control" />
                                        </td>
                                        <td><input type="text" value="" name="" placeholder="Enter your Price"
                                                class="form-control" />
                                        </td>
                                        <td><button type="button" class="btn btn-danger remove-tr">Remove</button></td>
                                    </tr> --}}
                                    {{-- @endforeach --}}
                                </table>
                            </div>
                            <button type="submit" class="btn btn-success float-right mb-3 mr-3">Save</button>
                        </form>


                        {{-- <script type="text/javascript">
                            var i = 0;
               
            $("#add").click(function(){   
                ++i;
                $("#dynamicTable").append('<tr><td><input type="text" name="addMore['+i+'][kd_barang]" placeholder="Enter your Name" class="form-control" /></td><td><input type="text" name="addMore['+i+'][Nama_Barang]" placeholder="Enter your Qty" class="form-control" /></td><td><input type="text" name="addMore['+i+'][qty]" placeholder="Enter your Price" class="form-control" /></td><td><input type="text" name="addMore['+i+'][harga_satuan]" placeholder="Enter your Name" class="form-control" /></td><td><input type="text" name="addMore['+i+'][jumlah]" placeholder="Enter your Name" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>');
            });
           
            $(document).on('click', '.remove-tr', function(){  
                 $(this).parents('tr').remove();
            });  

            $(document).ready(function() {
                $('.select_nm_brg').select2();
            });
           
                        </script> --}}

                        {{-- <table class="table table-stripped table-bordered">
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
                                @foreach ($data as $x)
                                <tr>
                                    <td>{{$x->Kode_Suplier}}</td>
                                    <td>{{$x->Nama_Suplier}}</td>
                                    <td>{{$x->alamat}}</td>
                                    <td>{{$x->Kota_Suplier}}</td>
                                    <td>{{$x->Provinis_Suplier}}</td>
                                    <td>{{$x->Kode_POS_Suplier}}</td>
                                    <td>{{$x->Email_Suplier}}</td>
                                    <td>{{$x->No_HP_Suplier}}</td>
                                    <td>{{$x->NPWP_Suplier}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="float-right">
                            {!! $data->links() !!}
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection