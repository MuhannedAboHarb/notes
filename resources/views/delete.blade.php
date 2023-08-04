<form action="{{ route('delete', ['id' => $note->id]) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">
        حذف
    </button>
</form>
