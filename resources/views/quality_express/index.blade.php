@extends('template_admin.template')

@section('konten')
    <div class="mb-3">
        <nav aria-label="breadcrumb">
            <h6 class="font-weight-bolder text-white mb-0">Bill of Lading</h6>
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm text-white active" aria-current="page">Bill of Lading</li>
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
                                <h6 class="mt-2">Bill of Lading</h6>
                            </div>
                            <div class="col-lg-2" style="text-align: right">
                                <a href="{{ route('quality_express/add') }}" class="btn btn-primary"> Add Data</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                            width="5%">No.</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                            width="10%">Date</th>
                                        <th class=" text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"
                                            width="10%">Shipper <br>/ Exporter</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                            width="10%">Consignee</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                            width="10%">Bill of Lading No.</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                            width="10%">Issued By.</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                            width="10%">No of Original <br>B(s)/L(s) Signed</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                            width="10%">By</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                        width="10%">Download</th>
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
                                                {{ \Illuminate\Support\Str::limit($qe_data->shipper, 20, $end = '...') }}
                                            </td>
                                            <td class="text-xs mb-0  text-center">
                                                {{ \Illuminate\Support\Str::limit($qe_data->consignee, 20, $end = '...') }}
                                            </td>
                                            <td class="text-xs mb-0  text-center">
                                                {{ $qe_data->bill_of_lading_no }}
                                            </td>
                                            <td class="text-xs mb-0  text-center">
                                                {{ \Illuminate\Support\Str::limit($qe_data->notify_party, 20, $end = '...') }}
                                            </td>
                                            <td class="text-xs mb-0  text-center">
                                                {{ $qe_data->no_of_original_signed }}
                                            </td>
                                            <td class="text-xs mb-0">
                                                {{ \Illuminate\Support\Str::limit($qe_data->as_agent, 15, $end = '...') }}
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ route('quality_express/detail_checker', $qe_data->id) }}" class="btn btn-info text-xs mb-0 p-2" title="detail"> <i
                                                    class="fa fa-file-text"></i> Checker</a>
                                                <a href="{{ route('quality_express/create_pdf', $qe_data->id) }}"
                                                    class="btn btn-secondary text-xs mb-0 p-2" title="detail"><i
                                                        class="fa fa-file-pdf"></i> Final</a>
                                            </td>
                                            <td class="text-center row">
                                                <a href="{{ route('quality_express/edit', $qe_data->id) }}"
                                                    class="btn btn-warning text-xs mb-0 p-2 col-lg-5" title="edit"><i
                                                        class="fa fa-edit"></i> Edit</a>
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" class="col-lg-3"
                                                    action="{{ route('quality_express/destroy') }}" method="POST">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id" value="{{ $qe_data->id }}">
                                                    <button type="submit" class="btn btn-danger text-xs mb-0 p-2" title="delete"> <i
                                                            class="fa fa-trash"></i> Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="text-center text-mute" colspan="4">Data tidak tersedia</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
