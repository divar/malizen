<x-app-layout>
  <div class="py-3">
    <div class="mx-auto sm:px-3 lg:px-6">
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
      <span class="font-bold text-cyan-700">User</span>
      <div class="card space-y-2">
        <form class="w-full" method="POST" action="{{url('v1/users')}}">
          @csrf
          <div class="col">
            <div class="field">
              <label class="title-form" for="grid-full-name">Nama User</label>
              <input class="input-form @error('name') input-form-danger @enderror" id="grid-full-name" name="name"
                     type="text" value="{{old('name')}}" required placeholder="Long Nawang">
              {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p>--}}
            </div>
            <div class="field">
              <label class="title-form" for="grid-email">Email</label>
              <input class="input-form @error('email') input-form-danger @enderror" id="grid-email" name="email"
                     type="email" value="{{old('email')}}" required placeholder="email@host.com">
              {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p>--}}
            </div>
            <div class="field">
              <label class="title-form" for="grid-password">Password</label>
              <input class="input-form @error('password') input-form-danger @enderror" id="grid-password"
                     name="password" type="password" required placeholder="">
              {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p>--}}
            </div>
            <div class="field">
              <label class="title-form" for="grid-re-password">Re-Password</label>
              <input class="input-form @error('repassword') input-form-danger @enderror" id="grid-re-password"
                     name="repassword" type="password" required placeholder="">
              {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p>--}}
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
