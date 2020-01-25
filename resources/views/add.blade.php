<from action="{{ route('book_save') }}" method="post">
    @csrf
    <p>
        <input name="title" type="text"/>
    </p>
    <p>
        <input name="author" type="text"/>
    </p>
    <p>
        <textarea name="annotations"></textarea>
    </p>
    <p>
        <input type="submit" value="Save"/>
    </p>
</from>
