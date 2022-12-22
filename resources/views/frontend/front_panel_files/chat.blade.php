{{--{{dd($chats)}}--}}
@foreach($chats as $chat)
@if($chat->sender->id == auth()->id())
    <li class="clearfix">
        <div class="message-data text-right">
            <span class="message-data-time">{{$chat->sender->created}}</span> &nbsp; &nbsp;
            <span class="message-data-name">
{{--             @if($chat->sender->id==auth()->user()->id)--}}
{{--                    {{ucfirst($chat->receiver->name)}}--}}
{{--                @else--}}
{{--                    {{ucfirst($chat->sender->name)}}--}}
{{--                @endif--}}
            </span> <span class="fa fa-circle me"></span>
        </div>
        <div class="message other-message float-right">
            <p class="mb-0 text-white">{{$chat->message}}</p>
            <div class="position-absolute dropdown-btn-dots">
                <a role="button" class="fa fa-ellipsis-v text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                </a>
                <div class="p-0 dropdown-menu dropdown-menu-right" style="">
                    <button class="w-100 btn btn-bg delete-message" data-id="{{$chat->id}}"><span class="fa fa-trash mr-2"></span>Delete</button>
                </div>
            </div>
        </div>
    </li>
@else
    <li class="clearfix">
        <div class="message-data">
{{--            {{dd($chat)}}--}}
            <span class="message-data-time">{{$chat->receiver->created}}</span> &nbsp; &nbsp;
            <span class="message-data-name">
                  @if($chat->sender->id==auth()->user()->id)
                    {{ucfirst($chat->receiver->name)}}
                @else
                    {{ucfirst($chat->sender->name)}}
                @endif
            </span>
            <span class="fa fa-circle me"></span>
        </div>
        <div class="message  message my-message">
            <p class="mb-0 text-white">{{$chat->message}}</p>
            <div class="position-absolute dropdown-btn-dots">
                <a role="button" class="fa fa-ellipsis-v text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                <div class="p-0 dropdown-menu dropdown-menu-right" style="">
                    <button class="w-100 btn btn-bg delete-message delete-message" data-id="{{$chat->id}}"><span class="fa fa-trash mr-2"></span>Delete</button>
                </div>
            </div>
        </div>
    </li>
@endif
@endforeach
