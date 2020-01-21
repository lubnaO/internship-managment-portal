<h1>hi</h1>.
<div>
<form action="{{ route('Announcaments.store') }}"  method="POST" >
@csrf 
<div>
<input type="text" name="A_name" >
</div>
<div>
<button>Add</button>
</div>
</form>
</div>