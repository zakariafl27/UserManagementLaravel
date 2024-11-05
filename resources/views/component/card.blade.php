<div class="container my-5">
  <div class="row justify-content-center row-cols-4 gap-4">
    @foreach($profiles as $profile)
      <div class="col-auto"> 
        <div class="card" style="width: 20rem;">
          <img src="https://picsum.photos/id/237/200/300" class="card-img-top rounded-full" alt="Profile Image">
          <div class="card-body">
            <h5 class="card-title">{{$profile->name}}</h5>
            <p class="card-text">{{ Str::limit($profile->description, 50, '...') }}</p>
            <hr/>
            <a href="{{route('profile.show', $profile->id)}}" class="btn btn-primary">Afficher Plus...</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
  <div class="d-flex justify-content-center mt-4">
    {{ $profiles->links() }}
  </div>
</div>
