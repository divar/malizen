<x-app-layout>
  <div class="py-3">
    <div class="mx-auto sm:px-3 lg:px-6">
      <div class="flex flex-row-reverse w-full">
        <a href="{{url('v1/neighborhood-associations/create')}}" class="btn btn-blue rounded-md">Create</a>
      </div>
      <span class="font-bold text-cyan-700">RT</span>
      <div class="card space-y-2">
        @foreach($neighborhood_associations as $neighborhood_association)
          <div class="shadow-sm p-6 border border-gray-200 rounded-lg ">
            @include('components.neighborhood-association.list-item', ['neighborhood_association' => $neighborhood_association])
          </div>
        @endforeach
        @if(count($neighborhood_associations) === 0)
          @include('components.empty-list-item', ['entity' => 'RT'])
        @endif
        {{$neighborhood_associations->links('vendor.pagination.tailwind')}}
      </div>
    </div>
  </div>
</x-app-layout>
