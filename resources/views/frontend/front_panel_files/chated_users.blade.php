<ul class="list" id="chat_box">
    @foreach($chats as $chat)
        @if($chat->sender->id != auth()->user()->id)
            <li class="clearfix position-relative listing"
                onclick="chatName({{$chat->sender->id!=auth()->user()->id ? $chat->sender : $chat->receiver}} , {{$chat}})">
                <img src="{{asset('public/images/'.$chat->sender->image)}}" height="55px" width="55px" class="object-fit-contain" alt="avatar"/>
                <div class="about">
                    <div class="name">{{ucfirst($chat->sender->name)}}</div>
                    <div class="status">
                        <span class="fa fa-circle online"></span> online
                    </div>
                </div>
                <div class="position-absolute dropdown-btn-dots">
                    <a role="button" class="fa fa-ellipsis-v text-white" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                    </a>
                    <div class="p-0 dropdown-menu dropdown-menu-right">
                        <button class="w-100 btn btn-bg delete-user" data-id="{{$chat->sender->id}}"><span class="fa fa-trash mr-2"></span>Delete
                        </button>
                    </div>
                </div>
            </li>
        @else
            <li class="clearfix position-relative listing"
                onclick="chatName({{$chat->sender->id!=auth()->user()->id ? $chat->sender : $chat->receiver}}, {{$chat}})">
                <img src="{{asset('public/images/'.$chat->receiver->image)}}"  height="55px" width="55px" class="object-fit-contain" alt="avatar"/>
                <div class="about">
                    <div class="name">{{ucfirst($chat->receiver->name)}}</div>
                    <div class="status">
                        <span class="fa fa-circle online"></span> online
                    </div>
                </div>
                <div class="position-absolute dropdown-btn-dots">
                    <a role="button" class="fa fa-ellipsis-v text-white" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                    </a>
                    <div class="p-0 dropdown-menu dropdown-menu-right">
                        <button class="w-100 btn btn-bg delete-user" data-id="{{$chat->receiver->id}}"><span class="fa fa-trash mr-2"></span>Delete
                        </button>
                    </div>
                </div>
            </li>
        @endif
    @endforeach
    {{--                    <li class="clearfix position-relative listing">--}}
    {{--                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_02.jpg" alt="avatar"/>--}}
    {{--                        <div class="about">--}}
    {{--                            <div class="name">Aiden Chavez</div>--}}
    {{--                            <div class="status">--}}
    {{--                                <span class="fa fa-circle offline"></span> left 7 mins ago--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="position-absolute dropdown-btn-dots">--}}
    {{--                            <a role="button" class="fa fa-ellipsis-v text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
    {{--                            </a>--}}
    {{--                            <div class="p-0 dropdown-menu dropdown-menu-right">--}}
    {{--                                <button class="w-100 btn btn-bg"><span class="fa fa-trash mr-2"></span>Delete</button>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </li>--}}

    {{--                    <li class="clearfix position-relative listing">--}}
    {{--                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_03.jpg" alt="avatar"/>--}}
    {{--                        <div class="about">--}}
    {{--                            <div class="name">Mike Thomas</div>--}}
    {{--                            <div class="status">--}}
    {{--                                <span class="fa fa-circle online"></span> online--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="position-absolute dropdown-btn-dots">--}}
    {{--                            <a role="button" class="fa fa-ellipsis-v text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
    {{--                            </a>--}}
    {{--                            <div class="p-0 dropdown-menu dropdown-menu-right">--}}
    {{--                                <button class="w-100 btn btn-bg"><span class="fa fa-trash mr-2"></span>Delete</button>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </li>--}}
</ul>
