@extends('template_admin.template')

@section('konten')
<div class="mb-3">
    <nav aria-label="breadcrumb">
        <h6 class="font-weight-bolder text-white mb-0">Quality Express</h6>
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Index</li>
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
                    <h6 class="mt-2">Quality Express</h6>
                  </div>
                <div class="col-lg-2" style="text-align: right">
                <a href="" class="btn btn-primary"> Add Data</a>
                </div>
              </div>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" width="5%">No.</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" width="10%">Date</th>
                    <th class=" text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2" width="10%">Shipper <br>/ Exporter</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" width="10%">Export References</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" width="10%">Bill of Lading No.</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" width="10%">FMC No.</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" width="10%">No of Original <br>B(s)/L(s) Signed</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" width="10%">By</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-xs mb-0 text-center">
                        1.
                    </td>
                    <td class="text-xs mb-0">
                        27 Okt 2021
                    </td>
                    <td class="text-xs mb-0  text-center">
                        12345
                    </td>
                    <td class="text-xs mb-0  text-center">
                        testing
                    </td>
                    <td class="text-xs mb-0  text-center">
                        12345
                    </td>
                    <td class="text-xs mb-0  text-center">
                        12345
                    </td>
                    <td class="text-xs mb-0  text-center">
                        12345
                    </td>
                    <td class="text-xs mb-0">
                        Lathiif A.S
                    </td>
                    <td class="text-center">
                        <a href="" class="btn btn-info text-xs mb-0 p-2" title="detail"> <i class="fa fa-file-text"></i></a>
                        <a href="" class="btn btn-warning text-xs mb-0 p-2" title="edit"> <i class="fa fa-edit"></i></a>
                        <a href="" class="btn btn-danger text-xs mb-0 p-2" title="delete"> <i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
