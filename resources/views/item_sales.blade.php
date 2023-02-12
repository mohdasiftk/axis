@section('title','Item Sales')
@include('header')
<div class="container mt-5">
    <h3>Item Sales</h3>
<table class="table">
    <thead>
      <tr>
        <th scope="col">SL#</th>
        <th scope="col">Item </th>
        <th scope="col">Sold Count</th>
      </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
      <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$product->product_name}}</td>
        <td>{{$product->sale->count()}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@include('footer')