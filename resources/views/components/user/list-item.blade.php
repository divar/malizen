<div class="flex flex-col sm:flex-row sm:gap-x-3 gap-y-3 ">
  <div class="field basis-auto">
    <span class="font-bold">ID</span>
    <span class="">{{$user->id}}</span>
  </div>
  <div class="field basis-auto">
    <div class="field">
      <span class="font-bold">Name</span>
      <span class="">{{$user->name}}</span>
    </div>
  </div>
  <div class="field basis-auto">
    <span class="font-bold">Created At</span>
    <span class="">{{$user->created_at}}</span>
  </div>
  <div class="field shrink">
    <a href="{{url("/v1/users",$user->id)}}" class="btn btn-blue rounded-md">View</a>
  </div>
</div>
