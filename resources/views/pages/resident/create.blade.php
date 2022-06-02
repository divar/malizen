<x-app-layout>
  <div class="py-3">
    <div class="mx-auto sm:px-3 lg:px-6">
      <div class="flex flex-row-reverse w-full">
        {{-- <a href="{{url('v1/residents/create')}}" class="btn btn-blue rounded-md">Create</a>--}}
      </div>
      <span class="font-bold text-cyan-700">Resident</span>
      <div class="card space-y-2">
        <form class="w-full">
          <div class="col">
            <div class="field">
              <label class="title-form" for="grid-full-name">Full Name</label>
              <input class="input-form" id="grid-full-name" name="name" type="text" placeholder="Budi Nugroho">
              {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p>--}}
            </div>
            <div class="row">
              <div class="field w-full">
                <label class="title-form" for="grid-nik">NIK</label>
                <input class="input-form" id="grid-nik" name="nik" type="text" placeholder="340xxxxxxxxxxxx">
                {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p>--}}
              </div>
              <div class="field w-full">
                <label class="title-form" for="grid-no-kk">No. KK</label>
                <input class="input-form" id="grid-no-kk" name="kk" type="text" placeholder="21121xxxxxxxxxxxx">
                {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p>--}}
              </div>
            </div>
            <div class="row">
              <div class="field w-full">
                <label class="title-form" for="grid-birth-place">Tempat Lahir</label>
                <input class="input-form" id="grid-birth-place" name="birth_place" type="text" placeholder="Manokwari">
                {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p>--}}
              </div>
              <div class="field w-full">
                <label class="title-form" for="grid-birth-date">Tanggal Lahir</label>
                <input class="input-form" id="grid-birth-date" name="birth_date" type="date">
                {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p>--}}
              </div>
            </div>
            <div class="row space-x-3">
              <div class="field md:w-1/4">
                <label class="title-form" for="grid-district">Kecamatan</label>
                <div class="relative">
                  <select class="input-form" id="grid-district" name="district" onchange="getVillages(this)">
                    <option>pilih</option>
                    @foreach($districts as $district)
                      <option value="{{$district->id}}">{{$district->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="field md:w-1/4">
                <label class="title-form" for="grid-village">Kelurahan</label>
                <div class="relative">
                  <select class="input-form" id="grid-village" name="village"
                          onchange="getNeighborhoodAssociations(this)">
                    <option value="">Pilih</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row space-x-3">
              <div class="field md:w-1/4">
                <label class="title-form" for="grid-rt">RT</label>
                <div class="relative">
                  <select class="input-form" id="grid-rt" name="rt" onchange="choosedNeighborhoodAssociation(this)">
                    <option value="">Pilih</option>
                  </select>
                </div>
              </div>
              <div class="field">
                <label class="title-form" for="grid-rw">RW</label>
                <input class="input-form bg-gray-100" readonly id="grid-rw" name="citizen_association" type="text">
              </div>
              <div class="field lg:w-1/4">
                <label class="title-form" for="grid-ethnic">Suku</label>
                <input class="input-form" id="grid-ethnic" name="ethnic" type="text" placeholder="batak">
              </div>
            </div>
            <div class="field">
              <label class="title-form" for="grid-address">Alamat</label>
              <textarea class="input-form" readonly id="grid-address" name="address"
                        placeholder="Jalan Malinau Raya"></textarea>
            </div>
            <div class="row">
              <div class="field md:w-1/4">
                <label class="title-form" for="grid-agama">Agama</label>
                <div class="relative">
                  <select class="input-form" id="grid-agama">
                    @foreach($religions as $religion)
                      <option value="{{$religion->id}}">{{$religion->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="field md:w-1/4">
                <label class="title-form" for="grid-married-status">Status Kawin</label>
                <div class="relative">
                  <select class="input-form" id="grid-married-status" name="married_status">
                    <option value="BELUM KAWIN">Belum Kawin</option>
                    <option value="KAWIN">Kawin</option>
                    <option value="DUDA">Duda</option>
                    <option value="JANDA">Janda</option>
                  </select>
                </div>
              </div>
              <div class="field md:w-1/4">
                <label class="title-form" for="grid-profession">Profesi</label>
                <div class="relative">
                  <select class="input-form" id="grid-profession" name="profession">
                    <option>pilih</option>
                    @foreach($professions as $profession)
                      <option value="{{$profession->id}}">{{$profession->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="field ">
              <label class="title-form" for="grid-daily-activity">Aktivitas</label>
              <input class="input-form" id="grid-daily-activity" name="daily_activity" type="text"
                     placeholder="Bekerja dan melakukan penelitian">
            </div>
            <div class="field md:w-1/4">
              <label class="title-form" for="grid-home-owenership">Kepemilikan Rumah</label>
              <div class="relative">
                <select class="input-form" id="grid-home-owenership" name="grid_home_owenership">
                  <option value="MILIK SENDIRI">Milik Sendiri</option>
                  <option value="SEWA">Sewa</option>
                  <option value="TIDAK MEMILIKI">Tidak memiliki</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="field lg:w-1/4">
                <label class="title-form" for="grid-is-head-of-family">Merupakan Kepala Keluarga?</label>
                <span>
                  <input class="" id="grid-is-head-of-family" name="is_head_of_family" type="radio" value="yes"> ya
                  <input class="" id="grid-is-head-of-family" name="is_head_of_family" type="radio" value="not"
                         checked="true"> tidak
                </span>
              </div>
              <div class="field lg:w-1/4">
                <label class="title-form" for="grid-relationship-with-head-of-family">Hubungan Dengan Kepala Keluarga
                  ?</label>
                <input class="input-form" id="grid-relationship-with-head-of-family"
                       name="relationship_with_head_of_family" type="text" placeholder="Adik">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <x-slot:script>
    <script>
        let neighborhoodAssociations = [];

        function getVillages(event) {
            if (event.value === 'pilih') {
                $("#grid-village")
                    .find('option')
                    .remove()
                    .end()
                    .append('<option value="">Pilih</option>');
                return;
            }
            axios.get('{{route('api_get_villages')}}', {params: {'district-id': event.value}})
                .then(function (response) {
                    let options = '<option value="">Pilih</option>';
                    response.data.forEach(item => {
                        options = options + `<option value="${item.id}">${item.name}</option>`;
                    });

                    $("#grid-village")
                        .find('option')
                        .remove()
                        .end()
                        .append(options);
                })
                .catch(function (error) {
                    alert('something went wrong, try again !');
                });
        }

        function getNeighborhoodAssociations(event) {
            if (event.value === 'pilih') {
                $("#grid-rt")
                    .find('option')
                    .remove()
                    .end()
                    .append('<option value="">Pilih</option>');
                return;
            }
            axios.get('{{route('api_get_rts')}}', {params: {'village-id': event.value}})
                .then((response) => {
                    let options = '<option value="">Pilih</option>';
                    response.data.forEach(item => {
                        options = options + `<option value="${item.id}">${item.name}</option>`;
                    });

                    neighborhoodAssociations = response.data;

                    $("#grid-rt")
                        .find('option')
                        .remove()
                        .end()
                        .append(options);
                })
                .catch((error) => {
                    console.log(error)
                    alert('something went wrong, try again !');
                });
        }

        function choosedNeighborhoodAssociation(event) {
            let selectedNeighborhoodAssociation = neighborhoodAssociations.filter(item => {
                return parseInt(item.id) === parseInt(event.value);
            });
            if (selectedNeighborhoodAssociation.length > 0 && selectedNeighborhoodAssociation[0].citizen_association) {
                $("#grid-rw").val(selectedNeighborhoodAssociation[0].citizen_association.name)
            } else {
                $("#grid-rw").val('')
            }
        }
    </script>
  </x-slot:script>
</x-app-layout>
