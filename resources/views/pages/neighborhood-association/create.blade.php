<x-app-layout>
  <div class="py-3">
    <div class="mx-auto sm:px-3 lg:px-6">
      <div class="flex flex-row-reverse w-full">
        {{-- <a href="{{url('v1/residents/create')}}" class="btn btn-blue rounded-md">Create</a>--}}
      </div>
      <span class="font-bold text-cyan-700">RT</span>
      <div class="card space-y-2">
        <form class="w-full" method="POST" action="{{url('v1/neighborhood-associations')}}">
          @csrf
          <div class="col">
            <div class="field">
              <label class="title-form" for="grid-full-name">RT</label>
              <input class="input-form" id="grid-full-name" name="name" type="text" placeholder="3">
              {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p>--}}
            </div>
            <div class="field md:w-1/4">
              <label class="title-form" for="grid-village-id">Village</label>
              <div class="relative">
                <select class="input-form" id="grid-village-id" name="village_id" onchange="villageHasChange(this)">
                  <option value="">pilih</option>
                  @foreach($villages as $village)
                    <option value="{{$village->id}}">{{$village->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="field md:w-1/4">
              <label class="title-form" for="grid-citizen-association-id">RW</label>
              <div class="relative">
                <select class="input-form" id="grid-citizen-association-id" name="citizen_association_id">
                </select>
              </div>
            </div>
            <div class="field sm:w-40 place-self-end">
              <button class="btn btn-blue rounded">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <x-slot:script>
    <script>
        function villageHasChange(village) {
            axios.get('{{route('api_get_rws')}}', {params: {village_id: village.value}})
                .then(function (response) {
                    let options = '<option value="">Pilih</option>';
                    response.data.forEach(item => {
                      options = options + `<option value="${item.id}">${item.name}</option>`;
                    });
                    $("#grid-citizen-association-id")
                        .find('option')
                        .remove()
                        .end()
                        .append(options);
                })
                .catch(function (error) {
                });
        }
    </script>
  </x-slot:script>
</x-app-layout>
