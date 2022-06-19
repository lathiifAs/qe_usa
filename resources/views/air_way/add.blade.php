@extends('template_admin.template')

@section('konten')

<style>

textarea { font-family: Arial; }

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
    <h3 class="box-title">Air Way Bill</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item" aria-current="page"><a href="{{ route('air_way') }}"><i class="fa fa-file-pdf-o"></i> Air Way Bill</a></li>
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
                                    <h3 class="box-title">Add Data</h3>
                                </div>
                            </div>
                            <div class="col-lg-2" style="text-align: right">
                                <a href="{{ route('air_way') }}" class="btn btn-default btn-outline"> Back</a>
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
                        <form action="{{ route('air_way/store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="row col-lg-12 m-2">
                                <div class="col-lg-6">
                                    <label for="">Shipper Name and Address</label>
                                    <select
                                        class="js-example-basic-single form-control @error('shipper_exporter') is-invalid @enderror"
                                        name="shipper_name_address">
                                        @forelse ($shipper as $shp)
                                            <option value="{{ $shp->id }}">{{ $shp->shipper }}</option>
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
                                <div class="col-lg-6">
                                    <label for="">Issued by</label>
                                    <select
                                        class="js-example-basic-single form-control @error('for_delivery') is-invalid @enderror"
                                        name="issued_by">
                                        @forelse ($issued_by as $ib)
                                            <option value="{{ $ib->id }}">{{ $ib->issued_by }}</option>
                                        @empty
                                            <option>Data Kosong</option>
                                        @endforelse
                                    </select>
                                    @error('export_references')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row col-lg-12" style="margin-top: 15px">
                                <div class="col-lg-6">
                                    <label for="">Shipper's Account Number</label>
                                    <input type="text" name="shipper_account_number" id="" class="form-control">
                                    @error('fmc_no')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <label for="">Issuing Carrier's Agent Name and City</label>
                                    <input type="text" name="issuing_carrier" id="" class="form-control">
                                    @error('fmc_no')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row col-lg-12 m-2" style="margin-top: 15px">
                                <div class="col-lg-6">
                                    <label for="">Consignee's Name and Address</label>
                                    <select
                                        class="js-example-basic-single form-control @error('consignee') is-invalid @enderror"
                                        name="consignee_name_address">
                                        @forelse ($consignee as $cn)
                                            <option value="{{ $cn->id }}">{{ $cn->consignee }}</option>
                                        @empty
                                            <option>Data Kosong</option>
                                        @endforelse
                                    </select>
                                    @error('fmc_no')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row col-lg-12 m-2" style="margin-top: 15px">
                                <div class="col-lg-6">
                                    <label for="">Consignee's Account Number</label>
                                    <input type="text" name="fmc_no" id="" class="form-control">
                                    @error('shipper')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-3">
                                    <label for="">Agent IATA Code</label>
                                    <input type="text" class="form-control" name="agents_iata_cd">
                                    @error('agents_iata_cd')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-3">
                                    <label for="">Account No.</label>
                                    <input type="text" class="form-control" name="account_no">
                                    @error('account_no')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row col-lg-12 m-2" style="margin-top: 15px">
                                <div class="col-lg-12">
                                    <label for="">Airport of Departure (Addr. of First Carrier) and Requested
                                        Routing</label>
                                    <input type="text" class="form-control" name="airport_of_departure">
                                    @error('airport_of_departure')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row col-lg-12 m-2" style="margin-top: 15px">
                                <div class="col-lg-12">

                                    <label for="">Accounting Information</label>
                                    <select
                                        class="js-example-basic-single form-control @error('shipper') is-invalid @enderror"
                                        name="accounting_information">
                                        @forelse ($notify_party as $np)
                                            <option value="{{ $np->id }}">{{ $np->notify_party }}</option>
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
                                <div class="col-lg-2">
                                    <label for="">To</label>
                                    <input type="text" class="form-control" name="to">
                                    @error('to')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-2">
                                    <label for="">By First Carrier</label>
                                    <input type="text" class="form-control" name="by_first_carrier">
                                    @error('by_first_carrier')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-2">
                                    <label for="">to (2)</label>
                                    <input type="text" class="form-control" name="to_2">
                                    @error('to_2')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-2">
                                    <label for="">by</label>
                                    <input type="text" class="form-control" name="by">
                                    @error('by')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-2">
                                    <label for="">to (3)</label>
                                    <input type="text" class="form-control" name="to_3">
                                    @error('to_3')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-2">
                                    <label for="">by (2)</label>
                                    <input type="text" class="form-control" name="by_2">
                                    @error('by_2')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row col-lg-12 m-2" style="margin-top: 15px">
                                <div class="col-lg-2">
                                    <label for="">Currency</label>
                                    <input type="text" class="form-control" name="currency">
                                    @error('currency')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-2">
                                    <label for="">CHOS Code</label>
                                    <input type="text" class="form-control" name="chos_cd">
                                    @error('chos_cd')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-2">
                                    <label for="">WTNAL PPD</label>
                                    <input type="text" class="form-control" name="wtnal_pdd">
                                    @error('wtnal_pdd')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-2">
                                    <label for="">WTNAL COLL</label>
                                    <input type="text" class="form-control" name="wtnal_coll">
                                    @error('wtnal_coll')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-2">
                                    <label for="">Other PPD</label>
                                    <input type="text" class="form-control" name="qnay_pdd">
                                    @error('qnay_pdd')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-2">
                                    <label for="">Other COLL</label>
                                    <input type="text" class="form-control" name="qnay_coll">
                                    @error('qnay_coll')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row col-lg-12 m-2" style="margin-top: 15px">
                                <div class="col-lg-6">
                                    <label for="">Declared Value of Carriage</label>
                                    <input type="text" class="form-control" name="declared_carriage">
                                    @error('declared_carriage')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <label for="">Declared Value of customs</label>
                                    <input type="text" class="form-control" name="declared_costums">
                                    @error('declared_costums')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row col-lg-12 m-2" style="margin-top: 15px">
                                <div class="col-lg-3">
                                    <label for="">Airport of Destination</label>
                                    <input type="text" class="form-control" name="airport_of_destination">
                                    @error('airport_of_destination')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-3">
                                    <label for="">Start Flight Date</label>
                                    <input type="text" class="form-control" name="start_flight_date">
                                    @error('start_flight_date')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-3">
                                    <label for="">End Flight Date</label>
                                    <input type="text" class="form-control" name="end_flight_date">
                                    @error('end_flight_date')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-3">
                                    <label for="">Amount of Insurance</label>
                                    <input type="text" class="form-control" name="amount_of_insurance">
                                    @error('final_destination')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                            </div>
                            <div class="row col-lg-12 m-2" style="margin-top: 15px">
                                <div class="col-lg-12">
                                    <label for="">Handling Information</label>
                                    <textarea name="handling_information" class="form-control" id="" cols="30" rows="10"></textarea>
                                    @error('handling_information')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row col-lg-12 m-2" style="margin-top: 15px">
                                <div class="col-lg-3">
                                    <label for="">No. of Pieces RCP</label>
                                    <input type="text" class="form-control" name="no_of_pieces">
                                    @error('no_of_pieces')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-3">
                                    <label for="">Gross Weight</label>
                                    <input type="text" class="form-control" name="gross_weight">
                                    @error('gross_weight')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-3">
                                    <label for="">Kg lb</label>
                                    <input type="text" class="form-control" name="kglg">
                                    @error('kglg')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-3">
                                    <label for="">(Rate Class) Comodity Item No.</label>
                                    <input type="text" class="form-control" name="commodity_item">
                                    @error('commodity_item')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row col-lg-12 m-2" style="margin-top: 15px">
                                <div class="col-lg-3">
                                    <label for="">Chargeable Weight</label>
                                    <input type="text" class="form-control" name="chargeable_weight">
                                    @error('chargeable_weight')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-3">
                                    <label for="">Rate / Charge</label>
                                    <input type="text" class="form-control" name="rate_charge">
                                    @error('rate_charge')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-3">
                                    <label for="">Total</label>
                                    <input type="text" class="form-control" name="total">
                                    @error('total')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-3">
                                    <label for="">Nature and Qty of Goods</label>
                                    <input type="text" class="form-control" placeholder="incl. Dimens or Vol" name="nature_and_qty">
                                    @error('nature_and_qty')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row col-lg-12 m-2" style="margin-top: 15px">
                                <div class="col-lg-3">
                                    <label for="">(Weight Charge) Prepaid</label>
                                    <input type="text" class="form-control" name="prepaid">
                                    @error('prepaid')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-3">
                                    <label for="">(Weight Charge) Collect</label>
                                    <input type="text" class="form-control" name="collect">
                                    @error('collect')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <div class="col-lg-12 text-center">
                                        <label for="">----- Valuation Charge -----</label>
                                    </div>
                                    <div class="col-lg-12 row">
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="start_valuation_charge">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="end_valuation_charge">
                                        </div>
                                    </div>
                                    @error('final_destination')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row col-lg-12 m-2" style="margin-top: 15px">
                                <div class="col-lg-6">
                                    <div class="col-lg-12 row text-center">
                                        <label for="">--------- Tax ---------</label>
                                    </div>
                                    <div class="col-lg-12 row">
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="start_tax">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="end_tax">
                                        </div>
                                    </div>
                                    @error('final_destination')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-6" style="margin-top: 15px">
                                    <div class="col-lg-12 row text-center">
                                        <label for="">----- Total other Charges Due Agent -----</label>
                                    </div>
                                    <div class="col-lg-12 row">
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="start_total_charge_agent">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="end_total_charge_agent">
                                        </div>
                                    </div>
                                    @error('final_destination')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row col-lg-12 m-2" style="margin-top: 15px">
                                <div class="col-lg-12">
                                    <label for="">Other Charges</label>
                                    <input type="text" class="form-control" name="other_charges">
                                    @error('other_charges')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row col-lg-12 m-2" style="margin-top: 15px">
                                <div class="col-lg-6">
                                    <div class="col-lg-12 row text-center">
                                        <label for="">----- Total other Charges Due Carrier -----</label>
                                    </div>
                                    <div class="col-lg-12 row">
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="start_total_charge_carrier">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="end_total_charge_carrier">
                                        </div>
                                    </div>
                                    @error('final_destination')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-3">
                                    <label for="">Total Prepaid</label>
                                    <input type="text" class="form-control" name="total_repaid">
                                    @error('total_repaid')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-3">
                                    <label for="">Total Collect</label>
                                    <input type="text" class="form-control" name="total_collect">
                                    @error('total_collect')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row col-lg-12 m-2" style="margin-top: 15px">
                                <div class="col-lg-3">
                                    <label for="">Currenct Conversion Rates</label>
                                    <input type="text" class="form-control" name="current_conversion">
                                    @error('current_conversion')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-3">
                                    <label for="">CC Charges in Dest. Currency</label>
                                    <input type="text" class="form-control" name="cc_charges">
                                    @error('cc_charges')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-3">
                                    <label for="">Total Collect</label>
                                    <input type="text" class="form-control" name="place_of_delivery">
                                    @error('place_of_delivery')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <label for="">Charges at Destination (For Carrier's Use only at Destination)</label>
                                    <input type="text" class="form-control" name="charges_desti">
                                    @error('charges_desti')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row col-lg-12 m-2" style="margin-top: 15px">
                                <div class="col-lg-12">
                                    <label for="">Total Collect Charges</label>
                                    <input type="text" class="form-control" name="total_collect_charges">
                                    @error('total_collect_charges')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row col-lg-12 m-2" style="margin-top: 15px">
                                <div class="col-lg-12">
                                    <label for="">Signature of Shipper or his Agent</label>
                                    <input type="text" class="form-control" name="signature_of_shipper">
                                    @error('total_collect_charges')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row col-lg-12 m-2" style="margin-top: 15px">
                                <div class="col-lg-4">
                                    <label for="">Executed on</label>
                                    <input type="date" class="form-control" name="executed_date">
                                    @error('executed_date')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-4">
                                    <label for="">at (Place)</label>
                                    <input type="text" class="form-control" name="at_place">
                                    @error('at_place')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-lg-4" style="margin-top: 15px">
                                    <label for="">Signature if Issuing Carrier or its Agent</label>
                                    <input type="text" class="form-control" name="signature_of_issue">
                                    @error('signature_of_issue')
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

    @push('custom-scripts')

    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.0/axios.min.js"
                integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <!-- include summernote css/js -->
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


        <script type="text/javascript">
            $(document).ready(function() {

                $('.js-example-basic-single').select2({
                    minimumResultsForSearch: Infinity, //removes the search box
                });

                $('.summernote').summernote({
                    tabsize: 3,
                    height: 200
                });

            });
        </script>
    @endpush
@endsection
