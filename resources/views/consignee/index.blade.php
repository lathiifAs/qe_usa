@extends('template_admin.template')

@section('konten')
<div class="mb-3">
    <nav aria-label="breadcrumb">
        <h6 class="font-weight-bolder text-white mb-0">Consignee</h6>
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Consignee</li>
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
                    <h6 class="mt-2">Consignee</h6>
                  </div>
                <div class="col-lg-2" style="text-align: right">
                <a href="{{ route('master/consignee/add') }}" class="btn btn-primary"> Add Data</a>
                </div>
              </div>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" width="10%">No.</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" width="80%">Consignee</th>
                    <th class="text-secondary opacity-7" width="10%"></th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($consignee as $key => $cn)
                    <tr>
                        <td class="text-xs mb-0 text-center">
                            {{ $key+1 }}
                        </td>
                        <td class="text-xs mb-0">
                            {{ $cn->consignee}}
                        </td>
                        <td style=" text-align: center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('master/consignee/destroy') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ $cn->id }}">
                            <button type="submit" class="btn btn-danger text-xs mb-0 p-2"><i class="fa fa-trash"></i></button>
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
