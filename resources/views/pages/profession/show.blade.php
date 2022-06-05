<x-app-layout>
  <div class="py-3">
    <div class="mx-auto sm:px-3 lg:px-6">
      <div class="flex flex-row-reverse w-full">
        <a href="{{url('v1/professions/create')}}" class="btn btn-blue rounded-md">Create</a>
      </div>
      <span class="font-bold text-cyan-700">Profesi</span>
      <div class="card space-y-2">
        <div class="col">
          <div class="field">
            <label class="title-form">Profession</label>
            <label class="title-form">{{$profession->name}}</label>
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
