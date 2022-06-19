@extends('template_admin.template')

@section('konten')

<style>
    .preserveLines {
        white-space: pre-wrap;
    }
</style>

<div class="white-box">
    <h3 class="box-title">Air Way Bill</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active"><i class="fa fa-file-code-o"></i> Air Way Bill</li>
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
                                    <h3 class="box-title">Air Way Bill</h3>
                                </div>
                            </div>
                            <div class="col-lg-2" style="text-align: right">
                                <a href="{{ route('air_way/add') }}" class="btn btn-primary"> Add Data</a>
                            </div>
                        </div>
                    </div>

                    <hr>


                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                            width="5%">No.</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                            width="10%">Date</th>
                                        <th class=" text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"
                                            width="20%">Shipper <br>and Address</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                            width="5%">Total <br> Collect</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                            width="10%">at<br>(Place)</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                            width="20%">Signature <br> of Shipper</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                        width="25%">Download</th>
                                        <th class="text-secondary opacity-7" width="15%"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($aw as $key => $aw_data)
                                        <tr>
                                            <td class="text-xs mb-0 text-center">
                                                {{ $key + 1 }}
                                            </td>
                                            <td class="text-xs mb-0">
                                                {{ date('j F, Y', strtotime($aw_data->created_at)) }}
                                            </td>
                                            <td class="text-xs mb-0  text-center">
                                                {{ \Illuminate\Support\Str::limit($aw_data->shipper, 20, $end = '...') }}
                                            </td>
                                            <td class="text-xs mb-0  text-center">
                                                {{ $aw_data->total_collect_charges }}
                                            </td>
                                            <td class="text-xs mb-0  text-center">
                                                {{ $aw_data->at_place }}
                                            </td>
                                            <td class="text-xs mb-0">
                                                {{ $aw_data->signature_of_shipper }}
                                            </td>
                                            <td class="text-center">
                                                <div class="row">
                                                    <a href="{{ route('air_way/createpdf_checker', $aw_data->id) }}" class="btn btn-info" title="detail"> <i
                                                        class="fa fa-file-text"></i> Checker</a>
                                                    <a href="{{ route('air_way/create_pdf', $aw_data->id) }}"
                                                        class="btn btn-success" title="detail"><i
                                                        class="fa fa-file-text mr-1"></i> Final</a>
                                                </div>
                                            </td>
                                            <td class="text-center row">

                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('air_way/destroy') }}" method="POST">
                                                <a href="{{ route('air_way/edit', $aw_data->id) }}"
                                                    class="btn btn-warning text-xs mb-0 p-2" title="edit"><i
                                                        class="fa fa-edit"></i> </a>
                                                {{ csrf_field() }}
                                                <input type="hidden" name="id" value="{{ $aw_data->id }}">
                                                <button type="submit" class="btn btn-danger text-xs mb-0 p-2" title="delete"> <i
                                                        class="fa fa-trash"></i> </button>
                                            </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="text-center text-mute" colspan="8">Data tidak tersedia</td>
                                        </tr>
                                    @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
