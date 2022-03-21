@extends('template_admin.template')

@section('konten')
    <div class="mb-3">
        <nav aria-label="breadcrumb">
            <h6 class="font-weight-bolder text-white mb-0">Air Way</h6>
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm text-white active" aria-current="page">Air Way</li>
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
                                <h6 class="mt-2">Air Way</h6>
                            </div>
                            <div class="col-lg-2" style="text-align: right">
                                <a href="{{ route('air_way/add') }}" class="btn btn-primary"> Add Data</a>
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
                                            width="10%">Shipper <br>and Address</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                            width="10%">Issued by</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                            width="10%">Consignee <br>and Address</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                            width="10%">Total Collect</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                            width="10%">at<br>(Place)</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                            width="10%">Signature <br> of Shipper</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($aw as $key => $aw_data)
                                        <tr>
                                            <td class="text-xs mb-0 text-center">
                                                {{ $key + 1 }}
                                            </td>
                                            <td class="text-xs mb-0">
                                                {{ $aw_data->created_at }}
                                            </td>
                                            <td class="text-xs mb-0  text-center">
                                                {{ $aw_data->shipper_name_address }}
                                            </td>
                                            <td class="text-xs mb-0  text-center">
                                                {{ $aw_data->issued_by }}
                                            </td>
                                            <td class="text-xs mb-0  text-center">
                                                {{ $aw_data->consignee_name_address }}
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
                                                <a href="{{ route('air_way/create_pdf', $aw_data->id) }}"
                                                    class="btn btn-secondary text-xs mb-0 p-2" title="detail"> <i
                                                        class="fa fa-file-pdf"></i></a>
                                                {{-- <a href="" class="btn btn-info text-xs mb-0 p-2" title="detail"> <i
                                                        class="fa fa-file-text"></i></a> --}}
                                                <a href="{{ route('air_way/edit', $aw_data->id) }}"
                                                    class="btn btn-warning text-xs mb-0 p-2" title="edit"> <i
                                                        class="fa fa-edit"></i></a>
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                    action="{{ route('air_way/destroy') }}" method="POST">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id" value="{{ $aw_data->id }}">
                                                    <button type="submit" class="btn btn-danger text-xs mb-0 p-2" title="delete"> <i
                                                            class="fa fa-trash"></i></button>
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
