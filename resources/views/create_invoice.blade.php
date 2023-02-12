@section('title','Create Invoice')
@include('header')
<div class="container mt-5">
    <h3>Create Invoice</h3>
    <form action="{{route('add.invoice')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="InvNo">Inv.No</label>
            <input type="text" class="form-control" name="inv_id" value="{{$invno}}" readonly required>
          </div>
        <div class="form-group">
            <label for="Customer">Customer</label>
            <select class="form-control" name="customer_id" required>
                <option value="">--Select Customer--</option>
                @foreach ($customers as $customer)
                <option value="{{$customer->id}}">{{$customer->customer_name}}</option>
                @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="Product">Product</label>
            <select class="form-control" name="product_name" required>
                <option value="">--Select Product--</option>
                @foreach ($products as $product)
                <option value="{{$product->product_name}}">{{$product->product_name}}</option>
                @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="QTY">QTY</label>
            <input type="number" class="form-control" name="qty" required>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</div>
@include('footer')