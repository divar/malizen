<x-app-layout>
  <div class="py-3">
    <div class="mx-auto sm:px-3 lg:px-6">
      <div class="flex flex-row-reverse w-full">
        <a href="{{url('v1/neighborhood-associations/create')}}" class="btn btn-blue rounded-md">Create</a>
      </div>
      <span class="font-bold text-cyan-700">RT</span>
      <div class="card space-y-2">
        <div class="col">
          <div class="field">
            <label class="title-form">RT</label>
            <label class="title-text">{{$neighborhood_association->name}}</label>
          </div>
          <div class="field md:w-1/4">
            <label class="title-form" for="grid-village-id">Village</label>
            <label class="title-text">{{$neighborhood_association->village->name}}</label>
          </div>
          <div class="field md:w-1/4">
            <label class="title-form" for="grid-citizen-association-id">RW</label>
            <label class="title-text">
              {{isset($neighborhood_association->citizenAssociation) ? $neighborhood_association->citizenAssociation->name : '-'}}
            </label>
          </div>
        </div>
      </div>
    </div>
  </div>
  <x-slot:script>
    <script>
    </script>
  </x-slot:script>
</x-app-layout>
