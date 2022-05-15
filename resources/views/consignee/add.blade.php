@extends('template_admin.template')

@section('konten')

<div class="white-box">
    <h3 class="box-title">Consignee</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"> <i class="fa fa-database"></i> Master Data</a></li>
        <li class="breadcrumb-item" aria-current="page"><a href="{{ route('master/consignee') }}">Consignee</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Data</li>
        </ol>
    </nav>
</div>


    <div class="white-box">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="col-lg-12">
                                    <h3 class="box-title">Add Data Consignee</h3>
                                </div>
                            </div>
                            <div class="col-lg-2" style="text-align: right">
                                <a href="{{ route('master/consignee') }}" class="btn btn-default btn-secondary"> Back</a>
                            </div>
                        </div>
                    </div>

                    <hr>

                    @if ($errors->any())
                        <div class="alert alert-danger m-3" role="alert">
                            <h4>Error</h4>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif


                    @if ($message = Session::get('success'))
                    <div class="alert alert-success m-3" role="alert">
                        <h4>Success</h4>
                        {{ $message }}
                    </div>
                    @endif

                    <div class="card-body px-0 pt-0 pb-2">
                        <form action="{{ route('master/consignee/store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="row col-lg-12 m-2">
                                <div class="col-lg-12">
                                    <label for="">Consignee</label>
                                    <textarea class="form-control @error('consignee') is-invalid @enderror" name="consignee" value="{{ old('consignee') }}" id="" cols="100" rows="10"></textarea>
                                    {{-- <input type="text" class="form-control @error('consignee') is-invalid @enderror" name="consignee" value="{{ old('consignee') }}"> --}}
                                    @error('consignee')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>
                            </div>
                            <div class="row col-lg-12" style="margin-top: 15px">
                                <div class="col-lg-11">
                                </div>
                                <div class="col-lg-1" style="text-align: right">
                                    <button type="submit" class="btn btn-success">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
