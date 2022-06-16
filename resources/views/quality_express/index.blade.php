@extends('template_admin.template')

@section('konten')

<style>
    .preserveLines {
        white-space: pre-wrap;
    }
</style>

<div class="white-box">
    <h3 class="box-title">Bill of Lading</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active"><i class="fa fa-file-code-o"></i> Bill of Lading</li>
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
                                    <h3 class="box-title">Bill of Lading</h3>
                                </div>
                            </div>
                            <div class="col-lg-2" style="text-align: right">
                                <a href="{{ route('quality_express/add') }}" class="btn btn-primary"> Add Data</a>
                            </div>
                        </div>
                    </div>

                    <hr>


                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class=" text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    width="5%">No.</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    width="10%">Date</th>
                                <th class=" text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"
                                    width="10%">Shipper <br>/ Exporter</th>

                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    width="10%">Bill of Lading No.</th>

                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    width="10%">By</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                width="15%">Download</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                width="10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($qe as $key => $qe_data)
                                        <tr>
                                            <td class="text-xs mb-0 text-center">
                                                {{ $key + 1 }}
                                            </td>
                                            <td class="text-xs mb-0">
                                                {{ date('j F, Y', strtotime($qe_data->created_at)) }}
                                            </td>
                                            <td class="text-xs mb-0  text-center">
                                                <label for="" class='preserveLines'>
                                                    {{ \Illuminate\Support\Str::limit($qe_data->shipper, 20, $end = '...') }}
                                                </label>
                                            </td>

                                            <td class="text-xs mb-0  text-center">
                                                {{ $qe_data->bill_of_lading_no }}
                                            </td>

                                            <td class="text-xs mb-0">
                                                {{ \Illuminate\Support\Str::limit($qe_data->as_agent, 15, $end = '...') }}
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group dropup m-r-10">
                                                    <button aria-expanded="false" data-toggle="dropdown" class="btn btn-info dropdown-toggle waves-effect waves-light" type="button"><i class="fa fa-file-text mr-1"></i> Draft / Checker<span class="caret"></span></button>
                                                    <ul role="menu" class="dropdown-menu">
                                                        <li><a href="{{ route('quality_express/detail_checker', $qe_data->id) }}">Bill of Lading</a></li>
                                                        <li><a href="{{ route('quality_express/detail_checker_forwarder', $qe_data->id) }}">Forward Cargo Receipt</a></li>
                                                    </ul>
                                                </div>
                                                <a href="{{ route('quality_express/create_pdf', $qe_data->id) }}"
                                                    class="btn btn-success text-xs mb-0 p-2 mt-1" title="detail"><i
                                                    class="fa fa-file-text mr-1"></i> Final</a>
                                            </td>
                                            <td class="text-center row">

                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                    action="{{ route('quality_express/destroy') }}" method="POST">
                                                    <a href="{{ route('quality_express/edit', $qe_data->id) }}"
                                                        class="btn btn-warning text-xs mb-0 p-2" title="edit"><i
                                                            class="fa fa-edit"></i> </a>
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id" value="{{ $qe_data->id }}">
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
