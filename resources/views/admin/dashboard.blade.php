@extends('admin.layouts.app_admin')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-sm-3">
      <div class="jumbotron text-center">
        <p><span class="label label-primary">Категорій 0</span></p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="jumbotron text-center">
        <p><span class="label label-primary">Матеріалів 0</span></p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="jumbotron text-center">
        <p><span class="label label-primary">Відвідувачів 0</span></p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="jumbotron text-center">
        <p><span class="label label-primary">Сьогодні 0</span></p>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-6">
      <a class="btn btn-block btn-default" href="{{route('admin.category.index')}}">Створити категорію</a>
      <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading">Категорія перша</h4>
        <p class="list-group-item-text">Кількість матеріалів</p>
      </a>
    </div>
    <div class="col-sm-6">
      <a class="btn btn-block btn-default" href="#">Створити матеріал</a>
      <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading">Матеріал перший</h4>
        <p class="list-group-item-text">Категорія</p>
      </a>
    </div>
  </div>
</div>

@endsection
