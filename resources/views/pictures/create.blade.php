<form action="{{ $s3attributes['action'] }}" method="POST" enctype="multipart/form-data">
  <!--
  @csrf
  <input type="text" name="title" />
  @error('title')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
    -->
  @foreach($s3inputs as $name => $value)
    <input type="hidden" name="{{ $name }}" value="{{ $value }}">
  @endforeach
    
  <input type="file" name="file"/>
  @error('picture')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <input type="submit" />
</form>
