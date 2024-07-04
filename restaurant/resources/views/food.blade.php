
<div class="centered-text">
  <hr>
  <div style="background-color: white;">
    <h1>Our Menu</h1>
  </div>
  <hr>
</div>
<br>

<div class="row tm-gallery">
  <div class="tm-gallery-page">
   @foreach($data as $data)
    <article class="col-lg-2 col-md-2 col-sm-1 col-12 tm-gallery-item">
      <figure>
      <img src="{{ url('/foodimage/' . $data->image) }}" alt="Image" class="img-fluid tm-gallery-img" style="box-shadow: 0px 8px 12px rgba(0, 0, 0, 0.2); transition: box-shadow 0.3s ease-in-out;" />
        <figcaption>
          <h4 class="tm-gallery-title">{{$data->title}}</h4>
          <p class="tm-gallery-category">{{$data->category}}</p>
          <p class="tm-gallery-description">{{$data->description}}</p>
          <p class="tm-gallery-price">${{$data->price}}</p>
        </figcaption>
      </figure>
    </article>
    @endforeach
    </br>
    </br>
  </div>
</div>
