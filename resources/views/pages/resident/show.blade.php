<x-app-layout>
  <div class="py-3">
    <div class="mx-auto sm:px-3 lg:px-6">
      <div class="flex flex-row-reverse w-full">
        <a href="{{url('v1/residents/create')}}" class="btn btn-blue rounded-md">Create</a>
      </div>
      <span class="font-bold text-cyan-700">Resident</span>
      <div class="card space-y-2">
        <form class="w-full" method="POST" action="{{url('v1/villages')}}">
          @csrf
          <div class="col">
            <div class="field">
              <label class="title-form">Nama</label>
              <label class="label-text">{{$resident->name}}</label>
            </div>
            <div class="row">
              <div class="field w-full">
                <label class="title-form">NIK</label>
                <label class="label-text">{{$resident->nik}}</label>
              </div>
              <div class="field w-full">
                <label class="title-form">No. KK</label>
                <label class="label-text">{{$resident->kk}}</label>
              </div>
            </div>
            <div class="row">
              <div class="field w-full">
                <label class="title-form">Kebangsaan</label>
                <label class="label-text">{{$resident->nationality}}</label>
              </div>
              <div class="field w-full">
                <label class="title-form">Bahasa Utama</label>
                <label class="label-text">{{$resident->language}}</label>
              </div>
            </div>
            <div class="row">
              <div class="field w-full">
                <label class="title-form">Tempat Lahir</label>
                <label class="label-text">{{$resident->birth_place}}</label>
              </div>
              <div class="field w-full">
                <label class="title-form">Tanggal Lahir</label>
                <label class="label-text">{{$resident->birth_date}}</label>
              </div>
            </div>
            <div class="row space-x-3">
              <div class="field md:w-1/5">
                <label class="title-form">Kecamatan</label>
                <label class="label-text">{{$resident->neighborhoodAssociation->village->district->name}}</label>
              </div>
              <div class="field md:w-1/5">
                <label class="title-form">Kelurahan</label>
                <label class="label-text">{{$resident->neighborhoodAssociation->village->name}}</label>
              </div>
            </div>
            <div class="row space-x-3">
              <div class="field md:w-1/5">
                <label class="title-form">RT</label>
                <label class="label-text">{{$resident->neighborhoodAssociation->name}}</label>
              </div>
              <div class="field md:w-1/5">
                <label class="title-form">RW</label>
                <label
                    class="label-text">{{isset($resident->neighborhoodAssociation->citizenAssociation) ? $resident->neighborhoodAssociation->citizenAssociation->name : '-'}}</label>
              </div>
              <div class="field md:w-1/5">
                <label class="title-form">Suku</label>
                <label class="label-text">{{$resident->ethnic}}</label>
              </div>
            </div>
            <div class="field">
              <label class="title-form">Alamat</label>
              <label class="label-text">{{$resident->adress}}</label>
            </div>
            <div class="row">
              <div class="field md:w-1/5">
                <label class="title-form">Agama</label>
                <label class="label-text">{{$resident->religion->name}}</label>
              </div>
              <div class="field md:w-1/5">
                <label class="title-form">Status Kawin</label>
                <label class="label-text">{{$resident->married_status}}</label>
              </div>
              <div class="field md:w-1/5">
                <label class="title-form">Profesi</label>
                <label class="label-text">{{$resident->profession->name}}</label>
              </div>
            </div>
            <div class="row">
              <div class="field md:w-1/5">
                <label class="title-form">Status Pekerjaan</label>
                <label class="label-text">{{$resident->profession_status}}</label>
              </div>
              <div class="field">
                <label class="title-form">Aktivitas</label>
                <label class="label-text">{{$resident->daily_activity}}</label>
              </div>
            </div>
            <div class="field md:w-1/5">
              <label class="title-form">Kepemilikan Rumah</label>
              <label class="label-text">{{$resident->home_ownership}}</label>
            </div>
            <div class="row">
              <div class="field md:w-1/5">
                <label class="title-form" for="grid-is-head-of-family">Merupakan Kepala Keluarga?</label>
                <label class="label-text">{{$resident->is_head_of_family ? 'ya': 'tidak'}}</label>
              </div>
              <div class="field md:w-1/5">
                <label class="title-form" for="grid-relationship-with-head-of-family">Hubungan Dengan Kepala Keluarga
                  ?</label>
                <label class="label-text">{{$resident->relationship_with_head_of_family}}</label>
              </div>
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
