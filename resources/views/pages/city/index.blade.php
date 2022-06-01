<x-app-layout>
  <div class="py-3">
    <div class="mx-auto sm:px-3 lg:px-6">
      <div class="flex flex-row-reverse w-full">
        <a href="{{url('v1/cities/create')}}" class="btn btn-blue rounded-md">Create</a>
      </div>
      <span class="font-bold text-cyan-700">Kota / Kabupaten</span>
      <div class="card space-y-2">
        @foreach($cities as $city)
          <div class="shadow-sm p-6 border border-gray-200 rounded-lg ">
            @include('components.city.list-item', ['c' => $city])
          </div>
        @endforeach
        @if(count($cities) === 0)
          @include('components.empty-list-item', ['entity' => 'Kota\'s / Kabupaten'])
        @endif
        {{$cities->links('vendor.pagination.tailwind')}}
      </div>
    </div>
  </div>
</x-app-layout>
