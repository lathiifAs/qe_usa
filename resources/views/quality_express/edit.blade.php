@extends('template_admin.template')

@section('konten')

<style>

@media (min-width: 768px) {
    .col-sm-18, .col-sm-40, .col-sm-8half {
        float: left;
    }
    .col-sm-18 {
        width: 18%;
    }
    .col-sm-40 {
        width: 28%;
    }
    .col-sm-8half {
        width: 70.83333333%;
    }
}

    .select2-container .select2-selection {
    height: 40px;
    width: 83%;
    padding-top: 5px;
    }

    .select2-drop li {
  white-space: pre-line;
}

</style>



<div class="white-box">
    <h3 class="box-title">Bill of Lading</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item" aria-current="page"><a href="{{ route('quality_express') }}"><i class="fa fa-file-code-o"></i> Bill of Lading</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
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
                                    <h3 class="box-title">Edit Data</h3>
                                </div>
                            </div>
                            <div class="col-lg-2" style="text-align: right">
                                <a href="{{ route('quality_express') }}" class="btn btn-default btn-outline"> Back</a>
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

                    <div class="card-body px-0 pt-0 pb-2 mt-3">
                        <form action="{{ route('quality_express/update') }}" method="post">
                            <input type="hidden" value="{{ $qe->id }}" name="id">
                            {{ csrf_field() }}

                            <div class="row col-lg-12 m-2">
                                <div class="col-lg-6">
                                    <label for="">Shipper / Exporter</label>
                                    <select
                                        class="js-example-basic-single form-control @error('shipper_exporter') is-invalid @enderror"
                                        name="shipper_exporter">
                                         @forelse ($shipper as $shp)
                                            <option value="{{ $shp->id }}" @if ($qe->shipper_exporter == $shp->id) selected @endif>{{ $shp->shipper }}</option>
                                        @empty
                                            <option>Data Kosong</option>
                                        @endforelse
                                    </select>
                                    @error('shipper_exporter')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 row">
                                    <div class="col-lg-6">
                                        <label for="">Export References</label>
                                        <input type="text" name="export_references" id="" class="form-control" value="{{ old('export_references', $qe->export_references) }}">
                                        @error('export_references')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="">Bill of Lading No.</label>
                                        <input type="text" name="bill_of_lading_no" id="" value="{{ old('bill_of_lading_no', $qe->bill_of_lading_no) }}" class="form-control">
                                        @error('bill_of_lading_no')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row col-lg-12 m-2" style="margin-top: 15px">
                                <div class="col-lg-6">

                                </div>
                                <div class="col-lg-6 row">
                                    <div class="col-lg-6">
                                        <label for="">FMC No.</label>
                                        <input type="text" name="fmc_no" id="" value="{{ old('fmc_no', $qe->fmc_no) }}" class="form-control">
                                        @error('fmc_no')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="">No. of Original B(s)/L(s) Signed</label>
                                        <input type="text" name="no_of_original_signed" id="" value="{{ old('no_of_original_signed', $qe->no_of_original_signed) }}" class="form-control">
                                        @error('no_of_original_signed')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row col-lg-12 m-2" style="margin-top: 15px">
                                <div class="col-lg-6">
                                    <label for="">Consignee</label>
                                    <select
                                        class="js-example-basic-single form-control @error('consignee') is-invalid @enderror"
                                        name="consignee">
                                        @forelse ($consignee as $cn)
                                            <option value="{{ $cn->id }}" @if ($qe->consignee == $cn->id) selected @endif>{{ $cn->consignee }}</option>
                                        @empty
                                            <option>Data Kosong</option>
                                        @endforelse
                                        </select>
                                    @error('consignee')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <label for="">For Delivery Please Apply To</label>
                                    <select
                                        class="js-example-basic-single form-control @error('for_delivery') is-invalid @enderror"
                                        name="for_delivery">
                                        @forelse ($for_delivery as $fd)
                                            <option value="{{ $fd->id }}" @if ($qe->for_delivery == $fd->id) selected @endif>{{ $fd->for_delivery }}</option>
                                        @empty
                                            <option>Data Kosong</option>
                                        @endforelse
                                    </select>
                                    @error('for_delivery')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row col-lg-12 m-2" style="margin-top: 15px">
                                <div class="col-lg-6">
                                    <label for="">Notify Party</label>
                                    <select
                                        class="js-example-basic-single form-control @error('shipper') is-invalid @enderror"
                                        name="notify_party">
                                        @forelse ($notify_party as $np)
                                            <option value="{{ $np->id }}" @if ($qe->notify_party == $np->id) selected @endif>{{ $np->notify_party }}</option>
                                        @empty
                                            <option>Data Kosong</option>
                                        @endforelse
                                    </select>
                                    @error('shipper')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <label for="">Also Notify (Name and Full Address) / Domestic Routing</label>
                                    <select
                                        class="js-example-basic-single form-control @error('also') is-invalid @enderror"
                                        name="also_notify">
                                        @forelse ($also_notify as $an)
                                            <option value="{{ $an->id }}">{{ $an->also_notify }}</option>
                                        @empty
                                            <option>Data Kosong</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="row col-lg-12 m-2" style="margin-top: 15px">
                                <div class="col-lg-3">
                                    <label for="">Vessel Voy</label>
                                    <input type="text" class="form-control" name="vessel_voy" value="{{ old('vessel_voy', $qe->vessel_voy) }}">
                                    @error('vessel_voy')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-3">
                                    <label for="">Port of Loading</label>
                                    <input type="text" class="form-control" name="part_of_loading" value="{{ old('part_of_loading', $qe->part_of_loading) }}">
                                    @error('part_of_loading')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-3">
                                    <label for="">Pier or Place or Receipt</label>
                                    <input type="text" class="form-control" name="pier_or_place"  value="{{ old('pier_or_place', $qe->pier_or_place) }}">
                                    @error('pier_or_place')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-3">
                                    <label for="">Type of Move</label>
                                    <input type="text" class="form-control" name="type_of_move" value="{{ old('type_of_move', $qe->type_of_move) }}">
                                    @error('type_of_move')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row col-lg-12 m-2" style="margin-top: 15px">
                                <div class="col-lg-3">
                                    <label for="">Port of Discharge</label>
                                    <input type="text" class="form-control" name="port_of_discharge" value="{{ old('port_of_discharge', $qe->port_of_discharge) }}">
                                    @error('port_of_discharge')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-3">
                                    <label for="">Port of Delivery</label>
                                    <input type="text" class="form-control" name="place_of_delivery" value="{{ old('place_of_delivery', $qe->place_of_delivery) }}">
                                    @error('place_of_delivery')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <label for="">Final Destination (For the Merchant's Reference Only)</label>
                                    <input type="text" class="form-control" name="final_destination"  value="{{ old('final_destination', $qe->final_destination) }}">
                                    @error('final_destination')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row col-lg-12 m-2" style="margin-top: 15px">
                                <div class="col-lg-4">
                                    <label for="">Container No, Seal No, Mars & Nos</label>
                                    <textarea name="container_no" class="form-control" id="" cols="30" rows="10"> {{ old('container_no', $qe->container_no) }}</textarea>

                                    {{-- <div class="col-lg-12">
                                        <input type="text" class="form-control" name="cont_no" placeholder="CONT. NO">

                                    </div>
                                    <div class="col-lg-12 mt-4">
                                        <input type="text" class="form-control" name="seal_no" placeholder="SEAL NO.">

                                    </div>

                                    <div class="col-lg-12 mt-4">
                                        <input type="text" class="form-control" name="mother_vessel" placeholder="MOTHER VESSEL">

                                    </div> --}}

                                    @error('container_no')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <label for="">No of PKGS or Cont. ; Kind of PKGS, Desc of Goods</label>
                                        {{-- <textarea name="no_of_pkgs" id="editor" size="2" cols="20" rows="10">{!! old('no_of_pkgs', $qe->no_of_pkgs) !!}</textarea> --}}

                                    <textarea name="no_of_pkgs" class="form-control" id="" cols="20" rows="10">{!! old('no_of_pkgs', $qe->no_of_pkgs) !!}</textarea>
                                    @error('no_of_pkgs')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                {{-- <div class="col-lg-1">
                                    <label for="">Total Gross Weight KGS (Pounds)</label>
                                    <textarea name="total_gross_weight" class="form-control" id="" cols="30" rows="10">{{ old('total_gross_weight', $qe->total_gross_weight) }}</textarea>
                                    @error('total_gross_weight')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div> --}}
                                <div class="col-lg-2">
                                    <label for="">Total Meas CBM (CFT)</label>

                                    {{-- <div class="col-lg-12">
                                        <input type="text" class="form-control" name="total_net" >

                                    </div>
                                    <div class="col-lg-12 mt-4">
                                        <input type="text" class="form-control" name="total_measur">

                                    </div> --}}

                                    <textarea name="total_measur" class="form-control" id="" cols="30" rows="10">{{ old('total_measur', $qe->total_measur) }}</textarea>
                                    @error('total_measur')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>




                            {{-- <input type="text" class="form-control" name="desc_of_goods" placeholder="Desc of goods"> --}}
                            <div class="row col-lg-12 m-2 p-2" style="margin-top: 20px">
                                <div class="col-lg-12">
                                    <label for="">Total No of Packages</label>
                                    <input type="text" class="form-control" value="{{ old('total_no_pkgs', $qe->total_no_pkgs) }}" name="total_no_pkgs">
                                    @error('total_no_pkgs')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row col-lg-12 m-2"  style="margin-top: 20px">
                                <div class="col-lg-3">
                                    <label for="">Freight And Charges</label>
                                    <input type="text" class="form-control" value="{{ old('freight_and_charges', $qe->freight_and_charges) }}" name="freight_and_charges">
                                    @error('freight_and_charges')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-3">
                                    <label for="">Prepaid Collect</label>
                                    <input type="text" class="form-control" name="repaid_collect" value="{{ old('repaid_collect', $qe->repaid_collect) }}">
                                    @error('repaid_collect')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-3">
                                    <label for="">Place and Date of Issue</label>
                                    <input type="text" class="form-control" value="{{ old('place_and_date_issue', $qe->place_and_date_issue) }}" name="place_and_date_issue">
                                    @error('place_and_date_issue')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-3">
                                    <label for="">Date, By</label>
                                    <input type="text" class="form-control" value="{{ old('by', $qe->by) }}" name="by">
                                    @error('by')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row col-lg-12 m-2"  style="margin-top: 20px">
                                <div class="col-lg-12">
                                    <label for="">as Agent</label>
                                    <input type="text" class="form-control" value="{{ old('as_agent', $qe->as_agent) }}" name="as_agent" >
                                    @error('freight_and_charges')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row col-lg-12" style="margin-top: 20px">
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

    @push('custom-scripts')

    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.0/axios.min.js"
                integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {

                $('.js-example-basic-single').select2({
                    minimumResultsForSearch: Infinity, //removes the search box
                });

                ClassicEditor
                                .create( document.querySelector( '#editor' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
            });
        </script>
    @endpush
@endsection
