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
  <div class="card-header pl-3 text-white">Training registration response</div>
  <div class="card-body">



<table class="table">
    <tbody>
  @foreach (Auth::user()->student->status as $sec1)
    <tr>
    <td>
    <h4>Applay status:</h4><p><em>{{ $sec1->massege }}</em></p>
  
    </td>
    </tr>
    @endforeach

  </thead>
  <tbody>

  </tbody>
</table>
@endsection
