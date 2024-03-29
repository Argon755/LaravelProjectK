@extends('layouts.main')
@section('content')


<div>
<form action="{{ route('post.store') }}" method="post">
    @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Название продукта</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Название">
  </div>
  
  <div class="mb-3">
    <label for="content" class="form-label">Описание продукта</label>
        <textarea name="content" class="form-control" id="content" placeholder="Описание"></textarea>
  </div>
  
  <div class="mb-3">
    <label for="price" class="form-label">Цена продукта</label>
    <input type="text" name="price" class="form-control" id="price" placeholder="Цена">
  </div>

  <button type="submit" class="btn btn-primary">Добавить</button>
</form>
</div>

@endsection