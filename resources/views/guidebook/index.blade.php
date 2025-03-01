@extends('guidebook.layout')

@section('guidebook-title')
    Home
@endsection

@section('content')
    {!! breadcrumbs(['Guidebook' => 'guidebook']) !!}

    <h1>Guidebook</h1>
    <div class="card">
        <div class="card-body" style="text-align: center;">
            <p>Welcome to Helianthus! This is the guidebook that will help you navigate our cozy arpg.</p>
            <div>
            <img src="/images/smallPixels/HorseSprite01.png">
            </div>
            <p>For any questions, you can always ask in the discord.</p>
        </div>
    </div>
    <p></p>
    <div class="card">
        <h4 class="card-header" style="text-align: center">Getting Started</h4>
        <div class="card-body">
            <div style="text-align: center;">
                <a class="btn btn-primary" href="https://discord.gg/9sKePhTszp">Discord server</a>
            </div>
            <p>It is recommened to join the discord server - as almost everything goes there; our announcements, events, and our staff can be founded there!</p>
            <p>To join Helianthus, you need a <a href="link">Silken</a>. Silken are not free to create, and need to be obtained through official means
            <br>New members can create up to <b>two</b> Silken with <a href="link">MYO slots</a></p>
        </div>
    </div>
    <p></p>
    <div class="card">
        <h4 class="card-header" style="text-align: center">Obtaining a Silken</h4>
        <div class="card-body">
            <h5>MYO slots</h5>
            <p>Every members gets <b>two</b> MYO slots to start Helianthus with.</p>
            <h5>Breeding</h5>
            <p>Members can breed their Silken together to create new Silken. This is done through the <a href="link">breeding</a> page</p>
            <h5>Adopting</h5>
            <p>The most common way to obtain Silken is through buying either a <b>mystery </b> or a <b>custom</b> token. These tokens cost <b>money</b></p>
        </div>
@endsection
