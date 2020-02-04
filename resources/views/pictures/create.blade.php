<form action="{{ route('pictures.store') }}" method="POST">
  @csrf
  <input type="text" />
  <input type="file" />
  <input type="submit" />
</form>
