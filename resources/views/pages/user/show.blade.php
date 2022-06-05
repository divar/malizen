<x-app-layout>
  <div class="py-3">
    <div class="mx-auto sm:px-3 lg:px-6">
      <div class="flex flex-row-reverse w-full">
        <a href="{{url('v1/users/create')}}" class="btn btn-blue rounded-md">Create</a>
      </div>
      <span class="font-bold text-cyan-700">User</span>
      <div class="card space-y-2">
          <div class="col">
            <div class="field">
              <label class="title-form">Nama User</label>
              <label class="title-text">{{$user->name}}</label>
            </div>
            <div class="field">
              <label class="title-form">Email</label>
              <label class="title-text">{{$user->email}}</label>
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
