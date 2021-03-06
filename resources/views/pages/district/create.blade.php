<x-app-layout>
  <div class="py-3">
    <div class="mx-auto sm:px-3 lg:px-6">
      <div class="flex flex-row-reverse w-full">
        {{-- <a href="{{url('v1/residents/create')}}" class="btn btn-blue rounded-md">Create</a>--}}
      </div>
      <span class="font-bold text-cyan-700">Kecamatan</span>
      <div class="card space-y-2">
        <form class="w-full" method="POST" action="{{url('v1/districts')}}">
          @csrf
          <div class="col">
            <div class="field">
              <label class="title-form" for="grid-full-name">Nama Kecamatan</label>
              <input class="input-form" id="grid-full-name" name="name" type="text" placeholder="Kayan Hilir">
              {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p>--}}
            </div>
            <div class="field md:w-1/4">
              <label class="title-form" for="grid-profession">Kota / Kabupaten</label>
              <div class="relative">
                <select class="input-form" id="grid-profession" name="city_id">
                  @foreach($cities as $city)
                    <option value="{{$city->id}}">{{$city->name}}</option>
                  @endforeach
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

    </script>
  </x-slot:script>
</x-app-layout>
