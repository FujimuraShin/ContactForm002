<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>お問い合わせ入力画面</title>
        
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
       <h1>003_お問い合わせ入力画面</h1>

       <form action="{{url('confirm01')}}" method="POST">
        <ul>
                <li>
                    <label>名前</label><input type="text" name="name" class="normal_input"/>
                </li>

                <li>
                    <label>会社・団体名</label><input type="text" name="company" class="normal_input"/>
                </li>

                <li>
                    <label>TEL</label><input type="text" name="tel" class="normal_input"/>
                </li>

                <li>
                    <label>Mail</label><input type="text" name="mail" class="normal_input"/>
                </li>

                <li class="checkbox">
                        <input type="radio" value="作品掲載の依頼に関するお問い合わせ" name="chk">作品掲載の依頼に関するお問い合わせ<br/>
                        <input type="radio" value="掲載中の作品に関する問い合わせ" name="chk">掲載中の作品に関する問い合わせ<br/>
                        <input type="radio" value="その他" name="chk">その他
                </li>  

                <li class="textarea">
                    <label calss="naiyou_label">内容</label><textarea rows="10" cols="40" name="content"></textarea>
                </li>
            </ul>
            <br/><br/>

            {{csrf_field()}}
            <div id="button">
                <button>お問い合わせメール送信確認へ</button>
            </div>
            <br/><br/><br/><br/>
        </form>

</body>
</html>





