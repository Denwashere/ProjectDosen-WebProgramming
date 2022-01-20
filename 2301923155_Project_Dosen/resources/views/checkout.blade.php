@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">


        <div class="col-md-12">
            <h3>Checkout</h3><br>
            <table class="table border border-1">
  <thead class="bg-dark">
    <tr>
      <th scope="col" class="text-white">No</th>
      <th scope="col" class="text-white">Item Name</th>
      <th scope="col" class="text-white">Price</th>
      <th scope="col" class="text-white">Quantity</th>
      <th scope="col" class="text-white">Sub Total</th>
      <th scope="col" class="text-white">Delete</th>
    </tr>
  </thead>
    <tbody>
        <?php $no = 1; ?>
     
        <tr>
            <td> 1 </td>
            <td> Americano </td>
            <td> 25.000 </td>
            <td> 1 </td>
            <td> 25.000 </td>
            <td> <a type="submit" class="btn btn-danger" href="/del1">Delete</a> </td>
        </tr>   

        <tr>
            <td> 2 </td>
            <td> Avocado Juice </td>
            <td> 18.000 </td>
            <td> 2 </td>
            <td> 36.000 </td>
            <td> <button type="submit" class="btn btn-danger">
            {{ __('Delete') }}
        </button> </td>
        </tr>   

        <tr>
            <td> 3 </td>
            <td> Banana Milkshake </td>
            <td> 20.000 </td>
            <td> 1 </td>
            <td> 20.000 </td>
            <td> <button type="submit" class="btn btn-danger">
            {{ __('Delete') }}
        </button> </td>
        </tr>   


    </tbody>
</table>
        </div>
    </div>

<a class="text-light">____________________________________________________________________________________________________________________________________________________________</a> <a class="text-dark text-decoration-none">Grand Total: Rp. 61.000,-</a>
<a class="text-light">______________________________________________________________________________________________________________________________________________________________________</a> <a class="text-dark text-decoration-none">(CASH ONLY)</a><br><br><br><br>
<a class="text-light">_______________________________________________________________________________________________________________________________________________________________________</a> 
<a type="submit" class="btn btn-success" href="/tfyo">Checkout</a>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection
