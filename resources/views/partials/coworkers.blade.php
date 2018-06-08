
@isAdmin
<div class="input-field col s12">
  <select name="assignTo">
    <option value="" disabled selected>কাকে এস্যাইন করবেন</option>
    <option value="{{Auth::user()->id}}">নিজেকে ?</option>

    @foreach ($coworkers as $coworker)
      <option value="{{ $coworker->worker->id }}">{{ $coworker->worker->name }}</option>
    @endforeach
  </select>
  <label> কাকে এস্যাইন করবেন </label>
</div>
@endisAdmin
