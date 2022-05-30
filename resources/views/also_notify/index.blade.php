@extends('template_admin.template')

@section('konten')

<style>
    .preserveLines {
    white-space: pre-wrap;
}
</style>

<div class="white-box">
    <h3 class="box-title">Also Notify</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#"> <i class="fa fa-database"></i> Master Data</a></li>
          <li class="breadcrumb-item active" aria-current="page">Also Notify</li>
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
                        <h3 class="box-title">Also Notify</h3>
                      </div>
                  </div>
                <div class="col-lg-2" style="text-align: right">
                <a href="{{ route('master/also_notify/add') }}" class="btn btn-primary"> Add Data</a>
                </div>
              </div>
          </div>
          <hr>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" width="10%">No.</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" width="80%">Also Notify</th>
                    <th class="text-secondary opacity-7" width="10%"></th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($also_notify as $key => $cn)
                    <tr>
                        <td class="text-xs mb-0 text-center">
                            {{ $key+1 }}
                        </td>
                        <td class="text-xs mb-0">
                            <label for=""  class='preserveLines'>{{$cn->also_notify}}</label>
                        </td>
                        <td style=" text-align: center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('master/also_notify/destroy') }}" method="POST">
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
