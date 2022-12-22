@extends('frontend.frontend_panel.user_panel')
@section('content')
    <h4>Your messages</h4>
    <p><span class="fa fa-home"></span> - <span class="text-muted">{{auth()->user()->name}}</span></p>
    <div class="row mx-0 rounded light-box-shadow multiple-users-chat-box">
        <div class="col-lg-3 col-md-4 px-0">
            <div class="people-list">
                <div class="search-outer">
                    <div class="position-relative d-flex align-items-center search">
                        <input type="text" placeholder="search" class="form-control search-filter"/>
                        <span class="position-absolute fa fa-search"></span>
                    </div>
                </div>

                <ul class="list" id="chat_box">
                    @if(!$chats->isEmpty())

                    @forelse($chats as $chat)

                        @if(isset($chat->sender->id) && isset($chat->receiver->id) )

                        @if($chat->sender->id != auth()->user()->id)

                            <li class="clearfix position-relative listing"
                                onclick="chatName({{$chat->sender->id!=auth()->user()->id ? $chat->sender : $chat->receiver}} , {{$chat}})">
                                <img src="{{asset('public/images/'.$chat->sender->image)}}"  height="30px" width="30px" alt="avatar"/>
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
                                <img src="{{asset('public/images/'.$chat->receiver->image)}}"  height="30px" width="30px" alt="avatar"/>
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
                        @endif
                    @empty
                    @endforelse
                    @endif
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
            </div>
        </div>

        <div class="col-lg-9 col-md-8 px-0 chat-outer">
            <div class="chat">
                <div class="chat-inner d-none">
                    <div class="chat-header clearfix">
                        <img id="senderImage" src="" height="50px" width="50px" alt="avatar"/>

                        <div class="chat-about">
                            <div class="chat-with">Chat with Vincent Porter</div>
                            <div class="chat-num-messages">already 1 902 messages</div>
                        </div>

                        <span class="float-right d-flex align-items-center mt-md-0 mt-3">User<span
                                class="fa fa-circle ml-2 online"></span></span>
                    </div>

                    <div class="chat-history">
                        <ul>
                            <li class="clearfix">
                                <div class="message-data text-right">
                                    <span class="message-data-time">10:10 AM, Today</span> &nbsp; &nbsp;
                                    <span class="message-data-name">Olia</span> <span class="fa fa-circle me"></span>
                                </div>
                                <div class="message other-message float-right">
                                    <p class="mb-0 text-white">Hi Vincent, how are you? How is the project coming along?</p>
                                    <div class="position-absolute dropdown-btn-dots">
                                        <a role="button" class="fa fa-ellipsis-v text-white" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false">
                                        </a>
                                        <div class="p-0 dropdown-menu dropdown-menu-right" style="">
                                            <button class="w-100 btn btn-bg"><span class="fa fa-trash mr-2"></span>Delete
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><span class="fa fa-circle online"></span> Vincent</span>
                                    <span class="message-data-time">10:12 AM, Today</span>
                                </div>
                                <div class="position-relative message my-message">
                                    <p class="mb-0 text-white">Are we meeting today? Project has been already finished and I
                                        have results to show you.</p>
                                    <div class="position-absolute dropdown-btn-dots">
                                        <a role="button" class="fa fa-ellipsis-v text-white" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false">
                                        </a>
                                        <div class="p-0 dropdown-menu dropdown-menu-right" style="">
                                            <button class="w-100 btn btn-bg"><span class="fa fa-trash mr-2"></span>Delete
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="chat-message clearfix">
                        <textarea class="form-control" placeholder="Type your message" id="message"></textarea>
                        <div align="right" class="mt-md-4 mt-3">
                            <a role="button" class="btn btn-bg-white" id="sendBtn"><span
                                    class="fa fa-paper-plane mr-2"></span>Send</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="{{asset('public/front_end/js/jquery-3.5.1.min.js')}}"></script>
    <script>
        let chat_id = '';
        let receiver_id = '';

        function chatName(sender, chat) {
            $('.chat-inner').removeClass('d-none');
            $('.chat-with').text(sender.name);
            $('#senderImage').attr("src","{{asset('public/images')}} "+"/" + sender.image);
            $('.chat-num-messages').text(sender.phone);
            chat_id = chat;
            receiver_id = sender.id;
            $.ajax({
                url: "get-messages/" + sender.id,
                type: "GET",
                data: {
                    '_token': "{{csrf_token()}}"
                },
                success: function (data) {
                    $('.chat-history ul').html('');
                    $('.chat-history ul').append(data.messages);
                    $('#chat_box').animate({
                        scrollTop: $('#chat_box').get(0).scrollHeight
                    });
                }
            });
        }

        $(function () {
            $(document).on("click", ".multiple-users-chat-box .people-list .listing", function() {
                /*scroll to chat bottom*/
                setTimeout(() => {
                    $(".chat-history").scrollTop($(".chat-history")[0].scrollHeight);
                }, 400);
                /*scroll to chat bottom*/

                $(".multiple-users-chat-box .people-list .listing").removeClass('active');
                $(this).addClass('active');
            });

            /*search filter, left panel section people listing*/
            $(".multiple-users-chat-box .search-filter").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $(".multiple-users-chat-box .people-list .listing").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });
            /*search filter, left panel section people listing*/
        });

        $('#sendBtn').on('click', function () {
            var msg = $('#message').val();
            $.ajax({

                url: "save-message",
                type: "POST",
                data: {
                    '_token': "{{csrf_token()}}",
                    'message': msg,
                    'receiver_id': receiver_id,
                    'chat_id': chat_id
                },
                success: function (data) {
                    if(data.status){
                        $('#message').val('');
                        $('.chat-history ul').append(data.message);
                        /*scroll to chat bottom*/
                        $(".chat-history").scrollTop($(".chat-history")[0].scrollHeight);
                        /*scroll to chat bottom*/
                        $.ajax({
                            url: "get-users/",
                            type: "GET",
                            success: function (data) {

                                $('#chat_box').html('');
                                $('#chat_box').append(data);
                            }
                        });
                        $('#chat_box').animate({
                            scrollTop: $('#chat_box').get(0).scrollHeight
                        });
                    }
                }
            });
            // alert(msg);
        });

        $('#message').keyup(function(event) {
            if (event.which === 13) {
                $('#sendBtn')[0].click();
                $('#message').val('');
            }
        });

        setInterval(function () {
            if (receiver_id){
                $.ajax({
                    url: "get-messages/" + receiver_id,
                    type: "GET",
                    data: {
                        '_token': "{{csrf_token()}}"
                    },
                    success: function (data) {
                        $('.chat-history ul').html('');
                        $('.chat-history ul').append(data.messages);
                        $('#chat_box').animate({
                            scrollTop: $('#chat_box').get(0).scrollHeight
                        });
                    }
                });
            }
        },3000)
        $(document).on('click','.delete-user',function (){
           let id=$(this).data('id');

            $.ajax({
                url: "delete-chated-user/" + id,
                type: "GET",
                success: function (data) {
                    window.location.reload();

                                    }
            });
        });
        $(document).on('click','.delete-message',function (){
            let id=$(this).data('id');
            $.ajax({
                url: "delete-message/" + id,
                type: "GET",
                success: function (data) {


                }
            });
        });

    </script>
@endsection
