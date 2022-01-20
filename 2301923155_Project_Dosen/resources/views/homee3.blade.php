@extends('layouts.app2')

@section('content')



    <div class="card-group justify-content-center">
    <div class="row align-items-start">
        
  <div class="col">
  <div class="card border-danger bg-danger" style="width: 26rem;">
  <img src="https://i.ibb.co/hg8SdH9/vanilla-Milkshake.jpg" class="card-img-top" alt="...">
<div class="card-body justify-content-center">
  <h3 class="text-center text-white">Vanilla Milkshake</h3>
  <h5 class="text-center text-white">Rp. 20.000</h5><hr>
  <div class="d-flex justify-content-center">
  <a class="text-center text-white" href="/login">Login to Order</a>
</div>

</div>
</div>
  </div>


  <div class="col">
  <div class="card border-danger bg-danger" style="width: 26rem;">
  <img src="https://i.ibb.co/0tRQyt7/741c6dd0a2019d577bf1d7f5b30ea3f2.jpg" class="card-img-top" alt="...">
  <div class="card-body justify-content-center">
  <h3 class="text-center text-white">Vanta 1,5 L</h3>
  <h5 class="text-center text-white">Rp. 15.000</h5><hr>
  <div class="d-flex justify-content-center">
  <a class="text-center text-white" href="/login">Login to Order</a>
</div>

</div>
</div>
  </div>
  

    </div>
    </div>
  </div>

<br>

<nav aria-label="...">
  <ul class="pagination justify-content-center">
    <li class="page-item">
    <a class="page-link" href="/homee2"><</a>
    </li>
    <li class="page-item" aria-current="page">
      <a class="page-link" href="/homee">1</a>
    </li>
    <li class="page-item"><a class="page-link" href="/homee2">2</a></li>
    <li class="page-item active"><a class="page-link" href="/homee3">3</a></li>
    <li class="page-item disabled">
      <a class="page-link" href="/homee3">></a>
    </li>
  </ul>
</nav>

          </div>
        </div>
      </div><br><br><br><br><br>
@endsection