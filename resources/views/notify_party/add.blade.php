@extends('template_admin.template')

@section('konten')
    <div class="mb-3">
        <nav aria-label="breadcrumb">
            <h6 class="font-weight-bolder text-white mb-0">Notify Party</h6>
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm text-white">Notify Party</li>
                <li class="breadcrumb-item text-sm active" aria-current="page">Add Data</li>
            </ol>
        </nav>
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-lg-10">
                                <h6 class="mt-2">Add Data Notify Party</h6>
                            </div>
                            <div class="col-lg-2" style="text-align: right">
                                <a href="{{ route('master/notify_party') }}" class="btn btn-secondary"> Back</a>
                            </div>
                        </div>
                    </div>

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
                        <form action="{{ route('master/notify_party/store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="row col-lg-12 m-2">
                                <div class="col-lg-6">
                                    <label for="">Notify Party</label>
                                    <input type="text" class="form-control @error('notify_party') is-invalid @enderror" name="notify_party" value="{{ old('notify_party') }}">
                                    @error('notify_party')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>
                            </div>
                            <div class="row col-lg-12">
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
