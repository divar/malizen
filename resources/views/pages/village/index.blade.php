<x-app-layout>
  <div class="py-3">
    <div class="mx-auto sm:px-3 lg:px-6">
      <div class="flex flex-row-reverse w-full">
        <a href="{{url('v1/villages/create')}}" class="btn btn-blue rounded-md">Create</a>
      </div>
      <span class="font-bold text-cyan-700">Kelurahan</span>
      <div class="card space-y-2">
        @foreach($villages as $village)
          <div class="shadow-sm p-6 border border-gray-200 rounded-lg ">
            @include('components.village.list-item', ['v' => $village])
          </div>
        @endforeach
        {{$villages->links('vendor.pagination.tailwind')}}
      </div>
    </div>
  </div>
</x-app-layout>
