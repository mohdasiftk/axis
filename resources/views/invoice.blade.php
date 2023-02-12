@section('title','Invoce')
@include('header')

<div class="container mt-5">
    <h3>Invoices </h3>
    @if(Session::has('message'))
    <div class="alert alert-success">
        {{Session::get('message')}}
    </div>
    @endif
    <a href="{{route('create.invoice')}}" class="btn btn-primary mb-3">New Invoice</a>
    <span class="float-right">
    <a href="{{route('no.sales')}}" class="btn btn-primary mb-3">No Sale Customers</a>
    <a href="{{route('all.sales')}}" class="btn btn-primary mb-3">All Sales</a>
    <a href="{{route('item.sales')}}" class="btn btn-primary mb-3">Item Sales</a>
    <a href="{{route('customer.sales')}}" class="btn btn-primary mb-3">Customer Sales</a>
    </span>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Sl#</th>
            <th scope="col">Inv.No</th>
            <th scope="col">Customer</th>
            <th scope="col">Products</th>
            <th scope="col">Quantity</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($invoices as $invoice)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$invoice->invoice_number}}</td>
                <td>{{$invoice->customer->customer_name}}</td>
                <td>{{$invoice->product_name}}</td>
                <td>{{$invoice->quantity}}</td>
                <td><a href="{{route('edit.invoice',$invoice->id)}}" class="btn btn-info mb-3">Edit</a> 
                    <a href="{{route('delete.invoice',$invoice->id)}}" class="btn btn-danger mb-3">Delete</a></td>
              </tr>
            @endforeach
        </tbody>
      </table>

</div>

@include('footer')