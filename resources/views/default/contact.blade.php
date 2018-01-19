@extends ('default.layouts.layouts')

@section( 'content' )

    <h2>Contact Us</h2>

    <form class="form-horizontal" action="{{ route('contact', ['name'=>'Hello']) }}">
        <div class="form-group">
            <label for="inputEmail" class="col-xs-2 control-label">Адрес email:</label>
            <div class="col-xs-10">
                <input type="text" name="name" class="form-control" id="inputEmail1" placeholder="Введите имя">
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="col-xs-2 control-label">Пароль:</label>
            <div class="col-xs-10">
                <input type="text" name="email" class="form-control" id="inputPassword" placeholder="Введите фамилию">
            </div>
        </div>
        <div class="form-group">
        <label for="inputPassword" class="col-xs-2 control-label">Сообщение:</label>
        <div class="col-xs-10">
            <textarea name="message" class="form-control"  placeholder="Введите сообщение" id="message" cols="30" rows="10"></textarea>
        </div>
        </div>

        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
                <button type="submit" class="btn btn-default">Отправить</button>
            </div>
        </div>
    </form>

@endsection