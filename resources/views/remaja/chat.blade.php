@extends('layouts.remaja')

@section('konten')
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    @include('layouts.headerremaja')
    @include('layouts.sidebarremaja')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
        </div>
        <div class="container-fluid">
            <div class="card">
                <div class="wrapper">
                    <div id="app" class="app">
                        <section id="main-left" class="main-left">
                            <div id="header-left" class="header-left">
                                PIK
                            </div>
                            <div id="chat-list" class="chat-list">
                                @foreach($friends as $friend)
                                <div class="friends" data-id="{{ $friend->id }}" data-name="{{ $friend->nama }}"
                                    data-avatar="">
                                    <div class="profile friends-photo">
                                    </div>
                                    <div class="friends-credent">
                                        <span class="friends-name">{{ $friend->nama }}</span>
                                        <span class="friends-message friend-status">Offline</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </section>
                        <section id="main-empty" class="main-right">
                            <p style="text-align: center; font-size: 35px">PIK-R Karangampel</p>
                        </section>
                        <section id="main-right" class="main-right hidden">
                            <div id="header-right" class="header-right">
                                <div id="header-img" class="">
                                    <!-- <img src="{{ asset('assets/images/ava2.jpg') }}" alt=""> -->
                                </div>
                                <h2 class="name friend-name">{{Auth::user()->nama}}</h2>
                            </div>
                            <div id="chat-area" class="chat-area">
                            </div>
                            <div id="typing-area" class="typing-area">
                                <input id="type-area" class="type-area" type="text" placeholder="Type something...">
                            </div>
                        </section>
                    </div>
                    <form action="{{ route('room.create')}}" method="POST">
                        @csrf
                        <input type="hidden" id="room-url">
                    </form>
                    <form action="{{ route('chat.save')}}" method="POST">
                        @csrf
                        <input type="hidden" id="message-url">
                    </form>

                    @vite('resources/js/app.js')
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</div>
</div>
@endsection