<form action="/student/{{$id->id}}" class="container" method="POST" >
       @csrf
  
    <br/> 

<div class="form-check">
  <input class="form-check-input" type="radio" name="massege" id="exampleRadios1" value="pass" checked>
  <label class="form-check-label" for="exampleRadios1">
  pass
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="massege" id="exampleRadios2" value="fail">
  <label class="form-check-label" for="exampleRadios2">
  fail
  </label>
</div>
<br/>
<button type="submit" class="btn btn-primary top-bar px-3">submit </button></td>
</form>