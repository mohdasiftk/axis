@section('title','Customer Sales')
@include('header')
<div class="container mt-5">
    <h3>All Sales</h3>
<table class="table">
    <thead>
      <tr>
        <th scope="col">SL#</th>
        <th scope="col">Inv No</th>
        <th scope="col">Customer Name</th>
        <th scope="col">Email</th>
        <th scope="col">Date</th>
      </tr>
    </thead>
    <tbody>
        @foreach($invoices as $invoice)
      <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$invoice->invoice_number}}</td>
        <td>{{$invoice->customer->customer_name}}</td>
        <td>{{$invoice->customer->email}}</td>
        <td>{{$invoice->created_at}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@include('footer')