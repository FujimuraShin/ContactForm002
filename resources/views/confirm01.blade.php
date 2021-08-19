<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>お問い合わせ確認画面</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
        <style>
            ul{
                width:500px;
                margin:0 auto;
            }
            ul li{
                list-style:none;
                margin-bottom:30px;
            }

            ul li .normal_input{
                width:300px;
                margin-left:auto;
            }

            label{
                margin-right:50px;
                width:100px;
            }

            ul li.checkbox{
                margin-left:150px;
            }

            ul li.textarea{
                margin-top:100px;
            }

            textarea{
                vertical-align:top;
            }

            .naiyou_label{
                margin-top:50px;
            }

            #button{
                text-align:center;
            }

        </style>
    
    </head>
    <body>
        <h1>004_お問い合わせ確認画面</h1>
        
        @isset($name,$company,$tel,$mail,$content)
        <form action="{{ route('complete01') }}" method="POST">
            <ul>
                    <li>
                        <label>名前</label><input type="text" name="name" value={{$name}} class="normal_input" />
                    </li>

                    <li>
                        <label>会社・団体名</label><input type="text" name="company" value={{$company}} class="normal_input" />
                    </li>

                    <li>
                        <label>TEL</label><input type="text" name="tel" value={{$tel}} class="normal_input" />
                    </li>

                    <li>
                        <label>Mail</label><input type="text" name="mail" value={{$mail}} class="normal_input" />
                    </li>

                    @if($chk==1)
                    <li class="checkbox">
                            <input type="radio" name="chk" value="作品掲載の依頼に関するお問い合わせ" checked="checked">作品掲載の依頼に関するお問い合わせ<br/>
                            <input type="radio" name="chk" value="掲載中の作品に関する問い合わせ">掲載中の作品に関する問い合わせ<br/>
                            <input type="radio" name="chk" value="その他">その他
                    </li>  
                    @elseif($chk==2)
                    <li class="checkbox">
                            <input type="radio" name="chk" value="作品掲載の依頼に関するお問い合わせ">作品掲載の依頼に関するお問い合わせ<br/>
                            <input type="radio" name="chk" value="掲載中の作品に関する問い合わせ" checked="checked">掲載中の作品に関する問い合わせ<br/>
                            <input type="radio" name="chk" value="その他">その他<br/>
                    </li>  
                    @elseif($chk==3)
                    <li class="checkbox">
                            <input type="radio" name="chk" value="作品掲載の依頼に関するお問い合わせ">作品掲載の依頼に関するお問い合わせ<br/>
                            <input type="radio" name="chk" value="掲載中の作品に関する問い合わせ">掲載中の作品に関する問い合わせ<br/>
                            <input type="radio" name="chk" value="その他" checked="checked">その他<br/>
                    </li>  
                    @endif

                    <li class="textarea">
                        <label calss="naiyou_label">内容</label><textarea rows="10" cols="40" name="content">{{$content}}</textarea>
                    </li>
                </ul>
                {{csrf_field()}}
            @endisset
            <br/><br/>

                <p style="color:red;text-align:center;">※以上の内容でよろしければ送信させて頂きます。</p>

                <div id="button">
                    <button name="action" type="submit">お問い合わせメール送信</button>
                </div>
            <br/><br/><br/><br/>
        </form>
</body>
</html>





