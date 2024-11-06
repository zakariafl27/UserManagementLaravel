@props(['profiles']);

<div class="container mx-auto my-5">
  <div class="flex flex-wrap justify-center gap-9">
    @foreach($profiles as $profile)
      <div class="w-60 rounded-lg">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
          <img src="https://picsum.photos/id/237/200/300" class="w-full h-48 object-cover rounded-lg" alt="Profile Image">
          <div class="p-4">
            <h5 class="text-base font-serif ">{{$profile->name}}</h5>
            <p class="text-gray-600">{{ Str::limit($profile->description, 40, '...') }}</p>
            <hr class="my-2"/>
            <a href="{{route('profile.show', $profile->id)}}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md mt-2 hover:bg-blue-600">Afficher Plus...</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
  
  <div class="flex justify-center mt-4">
    
        {{ $profiles->links('pagination::tailwind') }}
    
</div>
</div>
