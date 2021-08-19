<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>お問い合わせ</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <h1>005_メール送信画面</h1>

        <a href="{{route('complete')}}">
            <button>送信</button>
        </a>

        <!--
        {{ Form::submit('修正する',['name'=>'fix']) }}
        -->

        <form action="{{action('App\Http\Controllers\ContactsController@send_action')}}" method="POST">
            @csrf
            <input type="hidden" name="name001" value="{{$name}}"/>
            <input type="hidden" name="company" value="{{$company}}"/>
            <input type="hidden" name="tel" value="{{$tel}}"/>
            <input type="hidden" name="mail" value="{{$mail}}"/>
            <input type="hidden" name="chk" value="{{$chk}}"/>
            <input type="hidden" name="content" value="{{$content}}"/>

            <?php echo $name;?>
            <?php echo $company;?>
            <?php echo $tel;?>
            <?php echo $mail;?>
            <?php echo $chk;?>
            <?php echo $content;?>

            <button type="submit" name="submit">修正する</button>
        </form>

</body>
</html>





