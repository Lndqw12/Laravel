
 @extends('index')

 @section('content')
     @include('_common._form')
     <hr>

<div class="text-right"><b>Всего сообщений:</b><i class="badge">0</i> </div><br/>
    <div class="messages">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <span>Jessie J</span>
                    <span class="pull-right label label-info">17:15:00/ 03.07.2015</span>
                    </h3>
    </div>
            <div class="panel-body">
                I'm feeling sexy and free<br>
                Like glitter's raining on me<br>
                You're like a shot of pure gold<br>
                I think I'm 'bout to explode.<br>
                We can do this all night<br>
                Turn this club, skin tight<br>
                Baby, come on!<br>
                Pull me like a bass drum<br>
                Sparkin' up a rhythm<br>
                Baby, come on!<br>
                <hr/>
                <div class="pull-right">
                    <a class="btn btn-info" href="#">
                        <i class="glyphicon glyphicon-pencil"></i>
                        </a>
                    <button class="btn btn-danger">
                        <i class="glyphicon glyphicon-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
@stop
