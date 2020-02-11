<form action="{{ route('pictures.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <input type="text" name="title" />
  @error('title')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <input type="file" name="picture"/>
  @error('picture')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <input type="submit" />
</form>
