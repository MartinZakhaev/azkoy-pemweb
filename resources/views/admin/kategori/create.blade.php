@extends('layouts.main')

@section('content')

<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div>
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Dashboard</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item">Kategori</li>
                    <li class="breadcrumb-item active">Tambah Kategori</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card ">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">Form Tambah Kategori
                        <a href="{{ url('admin/kategori') }}" class="text-white btn btn-inverse float-right"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/kategori') }}" method="POST" class="form-horizontal" id="storeform">
                        @csrf
                        <div class="form-body">
                            <h3 class="box-title">Kategori Info</h3>
                            <hr class="m-t-0 m-b-40">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Nama Kategori</label>
                                        <div class="col-md-9">
                                            <input type="text" id="nama" name="nama" class="form-control" autocomplete="off" placeholder="Masukan teks...">
                                            @error('nama')
                                                <small class="form-control-feedback text-danger"> {{ $message }} </small>
                                            @enderror   
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Sub kategori</label>
                                        <div class="col-md-9">
                                            <input type="text" id="sub_nama" name="sub_nama" class="form-control" autocomplete="off" placeholder="Masukan teks...">
                                            @error('sub_nama')
                                                <small class="form-control-feedback text-danger"> {{ $message }} </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                        </div>
                        <hr>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn btn-success success-add">Submit</button>
                                            <button type="button" class="btn btn-inverse">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6"> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->

</div>
    
@endsection

@push('script')
    <script>

        $('#storeform').submit(function() {
            if($('#nama').val() !== '' && $('#sub_nama').val() !== ''){
                    window.location= "/admin/kategori/"
                    Swal.fire("Good job!", "Data Berhasil ditambahkan", "success")
            } else{
                Swal.fire({
                    type: 'error',
                    title: 'Oops...',
                    text: 'Data belum diisi!'
                });
            }
        });

        // $('.success-add').click(function () {
        //     window.location= "/admin/kategori/"
        //     Swal.fire("Good job!", "Data Berhasil ditambahkan", "success")
        // });
           
    </script>
@endpush
