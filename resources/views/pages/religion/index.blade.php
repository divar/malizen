<x-app-layout>
  <div class="py-3">
    <div class="mx-auto sm:px-3 lg:px-6">
      <div class="flex flex-row-reverse w-full">
        <a href="{{url('v1/religions/create')}}" class="btn btn-blue rounded-md">Create</a>
      </div>
      <span class="font-bold text-cyan-700">Agama</span>
      <div class="card space-y-2">
        @foreach($religions as $religion)
          <div class="shadow-sm p-6 border border-gray-200 rounded-lg ">
            @include('components.religion.list-item', ['r' => $religion])
          </div>
        @endforeach
        @if(count($religions) === 0)
          @include('components.empty-list-item', ['entity' => 'Religion'])
        @endif
        {{$religions->links('vendor.pagination.tailwind')}}
      </div>
    </div>
  </div>
</x-app-layout>
