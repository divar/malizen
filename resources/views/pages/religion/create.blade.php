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
                <label class="title-form" for="district">Kecamatan</label>
                <div class="relative">
                  <select class="input-form" id="grid-profession" name="profession">
                    @foreach($professions as $profession)
                      <option value="{{$profession->id}}">{{$profession->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="field md:w-1/4">
                <label class="title-form" for="district">Kelurahan</label>
                <div class="relative">
                  <select class="input-form" id="grid-profession" name="profession">
                    @foreach($professions as $profession)
                      <option value="{{$profession->id}}">{{$profession->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="row space-x-3">
              <div class="field">
                <label class="title-form" for="grid-rt">RT</label>
                <input class="input-form" id="grid-rt" name="neighborhood_association_id" type="number" placeholder="0">
              </div>
              <div class="field">
                <label class="title-form" for="grid-rw">RW</label>
                <input class="input-form bg-gray-100" readonly id="grid-rw" name="citizen_association" type="text" placeholder="0">
              </div>
              <div class="field lg:w-1/4">
                <label class="title-form" for="grid-ethnic">Suku</label>
                <input class="input-form" id="grid-ethnic" name="ethnic" type="text" placeholder="batak">
              </div>
            </div>
            <div class="field">
              <label class="title-form" for="grid-address">Alamat</label>
              <textarea class="input-form" readonly id="grid-address" name="address" placeholder="Jalan Malinau Raya"></textarea>
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
                    @foreach($professions as $profession)
                      <option value="{{$profession->id}}">{{$profession->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="field ">
              <label class="title-form" for="grid-daily-activity">Aktivitas</label>
              <input class="input-form" id="grid-daily-activity" name="daily_activity" type="text" placeholder="Bekerja dan melakukan penelitian">
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
                  <input class="" id="grid-is-head-of-family" name="is_head_of_family" type="radio" value="not" checked="true"> tidak
                </span>
              </div>
              <div class="field lg:w-1/4">
                <label class="title-form" for="grid-relationship-with-head-of-family">Hubungan Dengan Kepala Keluarga ?</label>
                <input class="input-form" id="grid-relationship-with-head-of-family" name="relationship_with_head_of_family" type="text" placeholder="Adik">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</x-app-layout>
