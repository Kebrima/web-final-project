<style>
    label {

    }
    span.badge{
        display: block;
    }
    span.badge.badge-success{
        color: #fff;
        background-color: #28a745;
    }
    span.badge.badge-warning{
        color: #fff;
        background-color: #dc3545;
    }
    span.badge.badge-danger{
        color: #212529;
        background-color: #ffc107;
    }
</style>

<div class="card mb-2" style="width: 15rem">
  <div class="label">
      @if($product->isNew())
          <span class="badge badge-success">New</span>
      @endif
          @if($product->isHit())
              <span class="badge badge-danger">Hit</span>
          @endif

          @if($product->isRecommend())
              <span class="badge badge-warning">Recommend</span>
          @endif

  </div>
<img class="card-img-top"  src="{{$product->image}}" alt="Card image cap">
    <div class="card-body">
        <h6 class="card-title">{{$product->name}}</h6>
        <p class="card-text">{{$product->price}} KZT</p>
        <form action="{{route('basket-add', $product)}}" method="POST">
            <button type="submit" class="btn btn-outline-dark" role="button"><ion-icon name="cart"></ion-icon>Garbage</button>
            <a href="{{route('product', [$product->category->code, $product->code])}}" class="btn btn-outline-dark" role="button">Details</a>
            @csrf
        </form>
    </div>
</div>
