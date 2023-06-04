<form action="{{route('profile.update',$lessonId)}}" method="POST">
@csrf
  @method('PUT')
<input class="form-control" type="text" placeholder="Default input" name="name" value="{{$lesson->user_name}}
">
<input class="form-control" type="text" placeholder="Default input" name="address"value="{{$lesson->address}}
">
<input class="form-control" type="text" placeholder="Default input" name="phone"value="{{$lesson->phone}}
">
<button type="submit"></button>
</form>

