@extends('layouts.main')
@section('content')
    <div>
      <form action="{{ route('post.store') }}" method="post" >
        @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="title"  placeholder="title" >
  </div>
   <div class="mb-3">
    <label for="content" class="form-label">Content</label>
    <textarea class="form-control"  name="content" id="content"  placeholder="Content"></textarea>
  </div>
   <div class="mb-3">
    <label for="image" class="form-label">Image</label>
    <input type="text"  name="image" class="form-control" id="image"  placeholder="image" >
  </div>
  <div class="mb-3">
      <label for="category" class="form-label">Category</label>
      <select id="disabledSelect" class="form-select" id="category" name="category_id" >
        @foreach($categories as $category)
        <option value="{{$category->id}}" >{{$category->title}}</option>
        @endforeach
      </select>
      </div>
      <div class="mb-3">
      <label for="tags" class="form-label">Tags</label>
      <select name="tags[]" class="form-select" id="tags">
          @foreach($tags as $tag)
        <option value="{{$tag->id}}">{{$tag->title}}</option>
         @endforeach
      </select>
    </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>
    </div>
@endsection