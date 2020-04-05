@extends('layouts.app')
@section('content')
<div class="container pt-5">
<div class="jumbotorn">
<div class="card">
  <h5 class="card-header pl-3 text-black">My Requests</h5>
  <div class="card-body">
    <h5 class="card-title "></h5>
    <table class="table">
    <tbody>
  @foreach (Auth::user()->student->records as $sec1)
    <tr>
    <td>
    <b>Applay status:</b><p><em>{{ $sec1->massege }}</em></p>
    <b>The tasks assigned to the student:</b> <p><em>{{ $sec1->tasks }}</em></p>
  
    </td>
    </tr>
  </thead>
  <tbody>

  </tbody>
</table>
 
  @endforeach
  @endsection