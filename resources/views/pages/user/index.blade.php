<x-app-layout>
  <div class="py-3">
    <div class="mx-auto sm:px-3 lg:px-6">
      <div class="flex flex-row-reverse w-full">
        <a href="{{url('v1/residents/create')}}" class="btn btn-blue rounded-md">Create</a>
      </div>
      <span class="font-bold text-cyan-700">Resident</span>
      <div class="card space-y-2">
        @foreach($residents as $resident)
          <div class="shadow-sm p-6 border border-gray-200 rounded-lg ">
            @include('components.resident.list-item', ['r' => $resident])
          </div>
        @endforeach
        @if(count($residents) === 0)
          @include('components.empty-list-item', ['entity' => 'Penduduk'])
        @endif
        {{$residents->links('vendor.pagination.tailwind')}}
      </div>
    </div>
  </div>
</x-app-layout>
