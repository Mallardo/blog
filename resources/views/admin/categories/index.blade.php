@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

  @component('admin.components.breadcrumb')
    @slot('title') Список категорій @endslot
    @slot('parent') Головна @endslot
    @slot('active') Категорії @endslot
  @endcomponent

  <hr>

  <a href="{{route('admin.category.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i> Створити категорию</a>
  <table class="table table-striped">
    <thead>
      <th>Назва</th>
      <th>Публикація</th>
      <th class="text-right">Дія</th>
    </thead>
    <tbody>
      @forelse ($categories as $category)
        <tr>
          <td>{{$category->title}}</td>
          <td>{{$category->published}}</td>
          <td class="text-right">
            <form onsubmit="if(confirm('Видалити?')){ return true } else { return false }" action="{{ route('admin.category.destroy', $category)}}" method="post">
              <input type="hidden" name="_method" value="DELETE">
              {{csrf_field()}}
              <a class="btn btn-default" href="{{route('admin.category.edit', $category)}}"><i class="fa fa-edit"></i></a>
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
    <tfoot>
      <tr>
        <td colspan="3">
          <ul class="pagination pull-right">
            {{$categories->links()}}
          </ul>
        </td>
      </tr>
    </tfoot>
  </table>
</div>

@endsection
