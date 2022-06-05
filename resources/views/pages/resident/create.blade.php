<x-app-layout>
  <div class="py-3">
    <div class="mx-auto sm:px-3 lg:px-6">
      <div class="flex flex-row-reverse w-full">
        {{-- <a href="{{url('v1/residents/create')}}" class="btn btn-blue rounded-md">Create</a>--}}
      </div>
      @if ($errors->any())
        <div class="card space-y-2">
          <div class="alert alert-danger mb-4">
            <ul>
              @foreach ($errors->all() as $error)
                <li><p class="text-red-500 text-xs italic">{{$error}}</p></li>
              @endforeach
            </ul>
          </div>
        </div>
      @endif
      <span class="font-bold text-cyan-700">Resident</span>
      <div class="card space-y-2">
        <form class="w-full" method="POST" action="{{ url('v1/residents') }}">
          @csrf
          <div class="col">
            <div class="field">
              <label class="title-form" for="grid-full-name">Nama</label>
              <input class="input-form @error('name') input-form-danger @enderror" id="grid-full-name" name="name"
                     value="{{old('name')}}" type="text"
                     placeholder="Budi Nugroho">
              @error('name')<p class="text-red-500 text-xs italic">{{$message}}</p>@enderror
            </div>
            <div class="row">
              <div class="field w-full">
                <label class="title-form" for="grid-nik">NIK</label>
                <input class="input-form @error('nik') input-form-danger @enderror" id="grid-nik" name="nik"
                       value="{{old('nik')}}" type="text"
                       placeholder="340xxxxxxxxxxxx">
                @error('nik')<p class="text-red-500 text-xs italic">{{$message}}</p>@enderror
              </div>
              <div class="field w-full">
                <label class="title-form" for="grid-no-kk">No. KK</label>
                <input class="input-form @error('kk') input-form-danger @enderror" id="grid-no-kk" name="kk"
                       value="{{old('kk')}}" type="text"
                       placeholder="21121xxxxxxxxxxxx">
                @error('kk')<p class="text-red-500 text-xs italic">{{$message}}</p>@enderror
              </div>
            </div>
            <div class="row">
              <div class="field w-full">
                <label class="title-form" for="grid-nationality">Kebangsaan</label>
                <input class="input-form @error('nationality') input-form-danger @enderror" id="grid-nationality"
                       name="nationality"
                       value="{{old('nationality') ? old('nationality') : 'Indonesia'}}"
                       type="text" placeholder="Indonesia">
                @error('nationality')<p class="text-red-500 text-xs italic">{{$message}}</p>@enderror
              </div>
              <div class="field w-full">
                <label class="title-form" for="grid-nationality">Bahasa Utama</label>
                <input class="input-form @error('language') input-form-danger @enderror" id="grid-nationality"
                       name="language"
                       value="{{old('language') ? old('nationality') : 'Indonesia'}}"
                       type="text" placeholder="Indonesia">
                @error('language')<p class="text-red-500 text-xs italic">{{$message}}</p>@enderror
              </div>
            </div>
            <div class="row">
              <div class="field w-full">
                <label class="title-form" for="grid-birth-place">Tempat Lahir</label>
                <input class="input-form @error('birth_place') input-form-danger @enderror" id="grid-birth-place"
                       name="birth_place" value="{{old('birth_place')}}"
                       type="text" placeholder="Manokwari">
                @error('birth_place')<p class="text-red-500 text-xs italic">{{$message}}</p>@enderror
              </div>
              <div class="field w-full">
                <label class="title-form" for="grid-birth-date">Tanggal Lahir</label>
                <input class="input-form @error('birth_date') input-form-danger @enderror" id="grid-birth-date"
                       name="birth_date" value="{{old('birth_date')}}"
                       type="date">
                @error('birth_date')<p class="text-red-500 text-xs italic">{{$message}}</p>@enderror
              </div>
            </div>
            <div class="row space-x-3">
              <div class="field md:w-1/4">
                <label class="title-form" for="grid-district">Kecamatan</label>
                <div class="relative">
                  <select class="input-form @error('rt') input-form-danger @enderror" id="grid-district"
                          name="district_id" onchange="getVillages(this)">
                    <option>pilih</option>
                    @foreach($districts as $district)
                      <option
                          value="{{$district->id}}" {{old('district_id') == $district->id? 'selected':''}}>{{$district->name}}</option>
                    @endforeach
                  </select>
                </div>
                @error('rt')<p class="text-red-500 text-xs italic">Kecamatan harus diisi.</p>@enderror
              </div>
              <div class="field md:w-1/4">
                <label class="title-form" for="grid-village">Kelurahan</label>
                <div class="relative">
                  <select class="input-form @error('rt') input-form-danger @enderror" id="grid-village"
                          name="village_id"
                          onchange="getNeighborhoodAssociations(this)">
                    <option value="">Pilih</option>
                  </select>
                </div>
                @error('rt')<p class="text-red-500 text-xs italic">Kelurahan harus diisi.</p>@enderror
              </div>
            </div>
            <div class="row space-x-3">
              <div class="field md:w-1/4">
                <label class="title-form" for="grid-rt">RT</label>
                <div class="relative">
                  <select class="input-form @error('rt') input-form-danger @enderror" id="grid-rt" name="rt"
                          onchange="choosedNeighborhoodAssociation(this)">
                    <option value="">Pilih</option>
                  </select>
                </div>
                @error('rt')<p class="text-red-500 text-xs italic">{{$message}}</p>@enderror
              </div>
              <div class="field">
                <label class="title-form" for="grid-rw">RW</label>
                <input class="input-form @error('citizen_association') input-form-danger @enderror bg-gray-100" readonly
                       id="grid-rw" name="citizen_association"
                       value="{{old('citizen_association')}}" type="text">
              </div>
              <div class="field lg:w-1/4">
                <label class="title-form" for="grid-ethnic">Suku</label>
                <input class="input-form @error('ethnic') input-form-danger @enderror" id="grid-ethnic" name="ethnic"
                       value="{{old('ethnic')}}" type="text"
                       placeholder="batak">
                @error('ethnic')<p class="text-red-500 text-xs italic">{{$message}}</p>@enderror
              </div>
            </div>
            <div class="field">
              <label class="title-form" for="grid-address">Alamat</label>
              <textarea class="input-form @error('address') input-form-danger @enderror" id="grid-address"
                        name="address"
                        placeholder="Jalan Malinau Raya">{{old('address')}}</textarea>
              @error('address')<p class="text-red-500 text-xs italic">{{$message}}</p>@enderror
            </div>
            <div class="row">
              <div class="field md:w-1/4">
                <label class="title-form" for="grid-agama">Agama</label>
                <div class="relative">
                  <select class="input-form @error('religion_id') input-form-danger @enderror" id="grid-agama"
                          name="religion_id">
                    @foreach($religions as $religion)
                      <option
                          value="{{$religion->id}}" {{old('religion_id') == $religion->id? 'selected':''}}>{{$religion->name}}</option>
                    @endforeach
                  </select>
                </div>
                @error('religion_id')<p class="text-red-500 text-xs italic">{{$message}}</p>@enderror
              </div>
              <div class="field md:w-1/4">
                <label class="title-form" for="grid-married-status">Status Kawin</label>
                <div class="relative">
                  <select class="input-form @error('married_status') input-form-danger @enderror"
                          id="grid-married-status" name="married_status">
                    <option value="BELUM KAWIN" {{old('married_status') === 'BELUM KAWIN'? 'selected':''}}>Belum Kawin
                    </option>
                    <option value="KAWIN" {{old('married_status') === 'KAWIN'? 'selected':''}}>Kawin</option>
                    <option value="DUDA" {{old('married_status') === 'DUDA'? 'selected':''}}>Duda</option>
                    <option value="JANDA" {{old('married_status') === 'JANDA'? 'selected':''}}>Janda</option>
                  </select>
                </div>
                @error('married_status')<p class="text-red-500 text-xs italic">{{$message}}</p>@enderror
              </div>
              <div class="field md:w-1/4">
                <label class="title-form" for="grid-profession">Profesi</label>
                <div class="relative">
                  <select class="input-form @error('profession_id') input-form-danger @enderror" id="grid-profession"
                          name="profession_id">
                    <option>pilih</option>
                    @foreach($professions as $profession)
                      <option
                          value="{{$profession->id}}" {{old('profession_id') == $profession->id? 'selected':''}}>{{$profession->name}}</option>
                    @endforeach
                  </select>
                </div>
                @error('profession_id')<p class="text-red-500 text-xs italic">{{$message}}</p>@enderror
              </div>
            </div>
            <div class="row">
              <div class="field md:w-1/4">
                <label class="title-form" for="grid-profession-status">Status Pekerjaan</label>
                <div class="relative">
                  <select class="input-form @error('profession_status') input-form-danger @enderror"
                          id="grid-profession-status" name="profession_status">
                    <option value="PEKERJA LEPAS" {{old('profession_status') === 'PEKERJA LEPAS'? 'selected':''}}>
                      Pekerja Lepas / Freelance
                    </option>
                    <option value="KARYAWAN TETAP" {{old('profession_status') === 'KARYAWAN TETAP'? 'selected':''}}>
                      Karyawan Tetap
                    </option>
                    <option value="KARYAWAN KONTRAK" {{old('profession_status') === 'KARYAWAN KONTRAK'? 'selected':''}}>
                      Karyawan Kontrak
                    </option>
                    <option value="PEMILIK" {{old('profession_status') === 'PEMILIK'? 'selected':''}}>Pemilik</option>
                  </select>
                </div>
                @error('profession_status')<p class="text-red-500 text-xs italic">{{$message}}</p>@enderror
              </div>
              <div class="field md:w-full">
                <label class="title-form" for="grid-daily-activity">Aktivitas</label>
                <input class="input-form @error('daily_activity') input-form-danger @enderror" id="grid-daily-activity"
                       name="daily_activity"
                       value="{{old('daily_activity')}}" type="text"
                       placeholder="Bekerja dan melakukan penelitian">
                @error('daily_activity')<p class="text-red-500 text-xs italic">{{$message}}</p>@enderror
              </div>
            </div>
            <div class="field md:w-1/4">
              <label class="title-form" for="grid-home-owenership">Kepemilikan Rumah</label>
              <div class="relative">
                <select class="input-form @error('home_ownership') input-form-danger @enderror"
                        id="grid-home-owenership" name="home_ownership">
                  <option value="MILIK SENDIRI" {{old('home_owenership') === 'MILIK SENDIRI'? 'selected':''}}>Milik
                    Sendiri
                  </option>
                  <option value="SEWA" {{old('home_owenership') === 'SEWA'? 'selected':''}}>Sewa</option>
                  <option value="TIDAK MEMILIKI" {{old('home_owenership') === 'TIDAK MEMILIKI'? 'selected':''}}>Tidak
                    memiliki
                  </option>
                </select>
              </div>
              @error('home_owenership')<p class="text-red-500 text-xs italic">{{$message}}</p>@enderror
            </div>
            <div class="row">
              <div class="field lg:w-1/4">
                <label class="title-form" for="grid-is-head-of-family">Merupakan Kepala Keluarga?</label>
                <span class="@error('is_head_of_family') input-form-danger @enderror">
                  <input class="" id="grid-is-head-of-family" name="is_head_of_family" type="radio" value="1"
                  {{old('is_head_of_family')?'checked="true"':''}}> ya
                  <input class="" id="grid-is-head-of-family" name="is_head_of_family" type="radio" value="0"
                  {{old('is_head_of_family')?'':'checked="true"'}}> tidak
                </span>
                @error('is_head_of_family')<p class="text-red-500 text-xs italic">{{$message}}</p>@enderror
              </div>
              <div class="field lg:w-1/4">
                <label class="title-form" for="grid-relationship-with-head-of-family">Hubungan Dengan Kepala Keluarga
                  ?</label>
                <input class="input-form @error('relationship_with_head_of_family') input-form-danger @enderror"
                       id="grid-relationship-with-head-of-family"
                       name="relationship_with_head_of_family" value="{{old('relationship_with_head_of_family')}}"
                       type="text" placeholder="Adik">
                @error('relationship_with_head_of_family')<p
                    class="text-red-500 text-xs italic">{{$message}}</p>@enderror
              </div>
            </div>
          </div>
          <div class="col">
            <button type="submit" class="btn btn-blue rounded-md">Submit</button>
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
