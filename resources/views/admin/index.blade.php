@extends('layouts.app')

@section('styles')
  <link href="{{ URL::asset('/assets/admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
@endsection

@section('content')
  <div class="row">
    <div class="col-lg-3 col-md-6">
      <div class="card">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col-7">
              <i class="mdi mdi-emoticon font-20 text-info"></i>
              <p class="font-16 m-b-5">New Clients</p>
            </div>
            <div class="col-5">
              <h1 class="font-light text-right mb-0">23</h1>
            </div>
          </div>
        </div>
      </div>                        
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="card">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col-7">
              <i class="mdi mdi-image font-20 text-success"></i>
              <p class="font-16 m-b-5">New Projects</p>
            </div>
            <div class="col-5">
              <h1 class="font-light text-right mb-0">169</h1>
            </div>
          </div>
        </div>
      </div>                        
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="card">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col-7">
              <i class="mdi mdi-currency-eur font-20 text-purple"></i>
              <p class="font-16 m-b-5">New Invoices</p>
            </div>
            <div class="col-5">
              <h1 class="font-light text-right mb-0">157</h1>
            </div>
          </div>
        </div>
      </div>                        
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="card">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col-7">
              <i class="mdi mdi-poll font-20 text-danger"></i>
              <p class="font-16 m-b-5">New Sales</p>
            </div>
            <div class="col-5">
              <h1 class="font-light text-right mb-0">236</h1>
            </div>
          </div>
        </div>
      </div>                        
    </div>
  </div>

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Purchase Order</h4>
          
          <div class="table-responsive">
            <table id="file_export" class="table table-striped table-bordered display">
              <thead>
                <tr>
                  <th>Product Name</th>
                  <th>Description</th>
                  <th>Quantity</th>
                  <th>Cost Price</th>
                  <th>Payment Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($orders as $order)
                  <tr>
                    <td>{{ $order->product_name }}</td>
                    <td>{!! $order->description !!}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>&#x20A6; {{ $order->current_price }}</td>
                    <td>{{ $order->status }}</td>
                    <td>
                      
                      <button class="btn btn-success btn-circle waves-effect waves-light" data-toggle="modal" data-target="#exampleModal{{ $order->id }}" data-whatever="@getbootstrap" data-toggle="tooltip" title="Approve Payment" data-placement="top">
                        <span class="btn-label">
                          <i class="fa fa-check"></i>
                        </span>
                      </button>

                      <button class="btn btn-secondary btn-circle waves-effect waves-light" data-toggle="modal" data-target="#smsModal{{ $order->id }}" data-toggle="tooltip" title="Send SMS Reminder" data-placement="top">
                        <span class="btn-label"><i class="fa fa-envelope-o"></i></span>
                      </button>

                      <button class="btn btn-danger btn-circle waves-effect waves-light" data-toggle="modal" data-target="#deleteClientModal{{ $order->id }}" data-toggle="tooltip" title="Delete Order" data-placement="top"><span class="btn-label"><i class="fa fa-trash"></i></span></button>

                    </td>
                  </tr> 
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th>Product Name</th>
                  <th>Description</th>
                  <th>Quantity</th>
                  <th>Cost Price</th>
                  <th>Payment Status</th>
                  <th>Action</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  @foreach($orders as $modal)
    <div class="modal fade bs-example-modal-lg" id="exampleModal{{ $modal->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel1">Confirm Payment for: {{ $modal->product_name }} - &#x20A6;{{ $modal->current_price }}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="form p-t-20" method="post" action="{{ route('payment.approve', $modal->id) }}">
          <div class="modal-body">
            {{ method_field('PUT') }}
            {{ csrf_field() }}            
            <div class="row">
              <div class="col-md-8">
                <h3>You are about to confirm payment for </h3>
                <p> <strong>Product Name: </strong> {{ $modal->product_name }}</p>
                <p> <strong>Product Description: </strong>{!! $modal->description !!} </p>
                <p> <strong>Quantity: </strong> {{ $modal->quantity }}</p>
                <p> <strong>Price: </strong>&#x20A6; {{ $modal->current_price }}</p>
              </div>
              <div class="col-md-4">
                <img src="{{ $modal->product_image }}" alt="Product Image">
              </div>
            </div>            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Confirm Payment</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  @endforeach
@endsection

@section('scripts')
  <script src="{{URL::asset('/assets/admin/extra-libs/DataTables/datatables.min.js')}}"></script>

  <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>

  <script src="{{URL::asset('/assets/admin/dist/js/pages/datatable/datatable-advanced.init.js')}}"></script>
@endsection