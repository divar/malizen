<x-app-layout>
  <div class="py-3">
    <div class="mx-auto sm:px-3 lg:px-6">
      <div class="flex flex-row-reverse w-full">
        <a href="{{url('v1/professions/create')}}" class="btn btn-blue rounded-md">Create</a>
      </div>
      <span class="font-bold text-cyan-700">Profession</span>
      <div class="card space-y-2">
        @foreach($professions as $profession)
          <div class="shadow-sm p-6 border border-gray-200 rounded-lg ">
            @include('components.profession.list-item', ['p' => $profession])
          </div>
        @endforeach
        @if(count($professions) === 0)
          @include('components.empty-list-item', ['entity' => 'Profession'])
        @endif
        {{$professions->links('vendor.pagination.tailwind')}}
      </div>
    </div>
  </div>
</x-app-layout>
