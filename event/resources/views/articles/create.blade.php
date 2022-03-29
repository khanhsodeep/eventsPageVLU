<form action="{{route('bai-viet.store')}}" method="POST">
    @csrf
    <div>
        <label for=""> Tieu de: </label>
        <input type="text" name="title"/>
    </div>
    <div>
        <label for="content">Noi Dung</label>
        <br/>
        <textarea cols="20" row="5" name="content"></textarea>
    </div>
    <br/>
    <div>
        <button type="submit">Save</button>
    </div>
</form>