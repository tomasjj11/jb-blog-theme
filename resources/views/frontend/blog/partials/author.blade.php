<md-card class="author" layout="row">
    <md-card-header flex="nogrow" layout-align="center center">
        <md-card-avatar>
            <img class="md-user-avatar" src="https://www.gravatar.com/avatar/{{ md5($user->email) }}?d=identicon&s=150"></img>
        </md-card-avatar>
    </md-card-header>
    <div layout="column" layout-align="center">
        <md-card-title flex="nogrow">
            <h4 class="auth-name">About <span class="heavy">{{ $user->first_name .  ' ' . $user->last_name }}</span></h4>
        </md-card-title>
        <md-card-content flex>
            <p>{{ $user->bio }}</p>
        </md-card-content>
    </div>
</md-card>



    {{--<img class="img-responsive img-circle author-img"--}}
         {{--src="https://www.gravatar.com/avatar/{{ md5($user->email) }}?d=identicon&s=150"--}}
         {{--title="{{ $user->first_name .  ' ' . $user->last_name }}">--}}

    {{--<div id="author-content" style="margin-top: -10px">--}}
        {{--<h4 id="auth-name"><strong>{{ $user->first_name .  ' ' . $user->last_name }}</strong></h4>--}}
        {{--<span class="small">--}}
            {{--{{ $user->bio }}--}}
            {{--<br>--}}
            {{--@if (!empty($user->twitter))--}}
                {{--<a href="https://twitter.com/{{ $user->twitter }}" target="_blank" id="social"><i class="fa fa-fw fa-twitter text-muted"></i></a>--}}
            {{--@endif--}}
            {{--@if (!empty($user->facebook))--}}
                {{--<a href="https://facebook.com/{{ $user->facebook }}" target="_blank" id="social"><i class="fa fa-fw fa-facebook text-muted"></i></a>--}}
            {{--@endif--}}
            {{--@if (!empty($user->github))--}}
                {{--<a href="https://github.com/{{ $user->github }}" target="_blank" id="social"><i class="fa fa-fw fa-github text-muted"></i></a>--}}
            {{--@endif--}}
            {{--@if(!empty($user->linkedin))--}}
                {{--<a href="https://linkedin.com/in/{{ $user->linkedin }}" target="_blank" id="social"><i class="fa fa-fw fa-linkedin text-muted"></i></a>--}}
            {{--@endif--}}
        {{--</span>--}}
    {{--</div>--}}
{{--</div>--}}