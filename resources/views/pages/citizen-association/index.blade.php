<x-app-layout>
  <div class="py-3">
    <div class="mx-auto sm:px-3 lg:px-6">
      <div class="flex flex-row-reverse w-full">
        <a href="{{url('v1/rws/create')}}" class="btn btn-blue rounded-md">Create</a>
      </div>
      <span class="font-bold text-cyan-700">RW</span>
      <div class="card space-y-2">
        @foreach($citizen_associations as $citizen_association)
          <div class="shadow-sm p-6 border border-gray-200 rounded-lg ">
            @include('components.citizen-association.list-item', ['citizen_association' => $citizen_association])
          </div>
        @endforeach
        @if(count($citizen_associations) === 0)
          @include('components.empty-list-item', ['entity' => 'RW'])
        @endif
        {{$citizen_associations->links('vendor.pagination.tailwind')}}
      </div>
    </div>
  </div>
</x-app-layout>
