
  @extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training registration response</title>

</head>
<body>
<div class="container pt-5">
<div class="jumbotorn">
<div class="card">
  <div class="card-header pl-3 text-white">THE GRADE</div>
  <div class="card-body">
  

 <table class="table">
    <tbody>
    <tr>
    <td>
    <h4>FINAL GRADE</h4><p><em>{{ Auth::user()->student->massege }}</em></p>
  
    </td>
    </tr>

  </thead>
  <tbody>

  </tbody>
</table>
@endsection
