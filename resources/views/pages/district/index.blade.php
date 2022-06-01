<x-app-layout>
  <div class="py-3">
    <div class="mx-auto sm:px-3 lg:px-6">
      <div class="flex flex-row-reverse w-full">
        <a href="{{url('v1/districts/create')}}" class="btn btn-blue rounded-md">Create</a>
      </div>
      <span class="font-bold text-cyan-700">Kecamatan</span>
      <div class="card space-y-2">
        @foreach($districts as $district)
          <div class="shadow-sm p-6 border border-gray-200 rounded-lg ">
            @include('components.district.list-item', ['d' => $district])
          </div>
        @endforeach
        @if(count($districts) === 0)
          @include('components.empty-list-item', ['entity' => 'Kecamatan'])
        @endif
        {{$districts->links('vendor.pagination.tailwind')}}
      </div>
    </div>
  </div>
</x-app-layout>
