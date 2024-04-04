<x-layout>

<h1>ciaociao</h1>

<div class="container">
    <div class="row">
        @foreach ($series as $serie)
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$serie['name']}}</h5>
                  <p class="card-text">{{$serie['year']}}</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>

</x-layout>