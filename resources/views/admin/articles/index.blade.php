@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

  @component('admin.components.breadcrumb')
    @slot('title') Список новин @endslot
    @slot('parent') Головна @endslot
    @slot('active') Новини @endslot
  @endcomponent

  <hr>

  <a href="{{route('admin.article.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i> Створити новину</a>
  <table class="table table-striped">
    <thead>
      <th>Назва</th>
      <th>Публикація</th>
      <th class="text-right">Дія</th>
    </thead>
    <tbody>
      @forelse ($articles as $article)
        <tr>
          <td>{{$article->title}}</td>
          <td>{{$article->published}}</td>
          <td class="text-right">
            <form onsubmit="if(confirm('Видалити?')){ return true } else { return false }" action="{{ route('admin.article.destroy', $article)}}" method="post">
              <input type="hidden" name="_method" value="DELETE">
              {{csrf_field()}}
              <a class="btn btn-default" href="{{route('admin.article.edit', $article)}}"><i class="fa fa-edit"></i></a>
              <button type="submit" class="btn"><i class="fa fa-trash-o"></i></button>
            </form>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="3" class="text-center"><h2>Дані не існують</h2></td>
        </tr>
      @endforelse
    </tbody>
  </table>
</div>

@endsection
