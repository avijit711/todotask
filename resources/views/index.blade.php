@extends('layouts.master')

@section('content')

  <table>
    <thead>
      <tr>
        <th>কাজ</th>
        @isAdmin
        <th>দায়িত্বে</th>
        @endisAdmin
        <th>সম্পাদন</th>
        <th>মুছুন</th>
      </tr>
    </thead>

    <tbody>
      {{-- Task list from database --}}
      @foreach ($tasks as $task)

        <tr>
          <td><a href="{{ route('updateStatus', $task) }}" href="#">
            @if (!$task->status)
              {{ $task->content }}
            @else
              <strike class="grey-text"> {{ $task->content }} </strike>
            @endif



          </a></td>
          @isAdmin
          <td><a class="green-text" href="#">{{ $task->user->name }}</a></td>
          @endisAdmin
          <td><a title="edit" href="{{ route('edit',$task->id) }}"> <i class="Medium material-icons">edit</i> </a></td>
          <td><a title="edit" oneclick="return confirm('Delete??');" href="{{ route('delete',$task->id) }}"> <i class="Medium red-text material-icons">delete</i> </a></td>
        </tr>

      @endforeach


    </tbody>
  </table>

  {{$tasks->links()}}

  {{-- <ul class="pagination">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul> --}}


  <div class="row">
  <form method="POST" action="{{ route('store') }}" class="col s12">
    <div class="row">
      <div class="input-field col s12">
        <input name="task" id="task" type="text" class="validate">
        <label for="task">নতুন কাজ</label>
      </div>
    </div>

    @include('partials.coworkers')

    <button type="submit" class="waves-effect waves-light btn">যুক্ত করুন</button><br>
    @csrf
  </form>


  @isWorkers
  <form action="{{ route('sendInvitation') }}" class="col s12" method="post">
    <div class="input-field">
      <select name="admin">
        <option value="" disabled selected>কার সাথে যুক্ত হবেন ? </option>

        @foreach ($coworkers as $coworker)
          <option value="{{ $coworker->id }}">{{ $coworker->name }}</option>
        @endforeach

      </select>
      <label> যুক্ত হোন </label>
      <button type="submit" class="waves-effect waves-light btn">যুক্ত করুন</button><br>
    </div>
    @csrf
  </form>

  @endisWorkers




  @isAdmin
  <br><br><br><br>
  <ul class="collection with-header">
    @if ($coworkers->count() > 0)
      <li class="collection-header"><h4>আপনার বন্ধুর তালিকা </h4></li>

      @foreach ($coworkers as $coworker)
        <li class="collection-item"><div><a href="#">{{ $coworker->worker->name }}</a><a href="{{ route('deleteFriend', $coworker->id) }}" class="secondary-content"><i class="material-icons">delete</i></a></div></li>
      @endforeach
    @else
      <h5 class="grey-text center-align">সরি, আপনার কোন সহকর্মী যুক্ত নেই </h5>
    @endif



  </ul>
  @endisAdmin

  </div>


@endsection
