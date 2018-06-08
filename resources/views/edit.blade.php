@extends('layouts.master')

@section('content')
  <div class="row">
  <form method="POST" action="{{ route('update',$task->id) }}" class="col s12">
    <div class="row">
      <div class="input-field col s12">
        <input name="task" id="task2" type="text" value="{{$task->content}}" class="validate">
        <label for="task2">সম্পাদন করুন</label>
      </div>
    </div>
    @include('partials.coworkers')
    <button type="submit" class="waves-effect waves-light btn">সম্পাদন করুন</button >
    @csrf
  </form>
  </div>


@endsection
