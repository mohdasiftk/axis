@section('title','Customer Sales')
@include('header')
<div class="container mt-5">
    <h3>No Sale Customers</h3>
<table class="table">
    <thead>
      <tr>
        <th scope="col">SL#</th>
        <th scope="col">Customer</th>
        <th scope="col">Sales Count</th>
      </tr>
    </thead>
    <tbody>
        @foreach($customers as $customer)
        @if ($customer->sale->count() == 0)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$customer->customer_name}}</td>
            <td>{{$customer->sale->count()}}</td>
          </tr>
        @endif
      @endforeach
    </tbody>
  </table>
</div>
@include('footer')