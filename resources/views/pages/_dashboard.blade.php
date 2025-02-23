<h1>Greetings, {!! Auth::user()->displayName !!}!</h1>
<div class="row">
    <div class="col-md-6">
        <div class="card mb-4 timestamp">
            <div class="card-body">
                <h5 class="card-title text-center">Dashboard</h5>
                It is currently {!! format_date(Carbon\Carbon::now()) !!} in Astrae.
                <h5 class="card-title text-center mt-3">Recent news</h5>
                Recent news here
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-body text-center">
                <h5 class="card-title">Featured character</h5>
                <div>
                    <a href="link">
                        <img src="{{ asset('images/testimagethumb.jpg') }}" class="img-thumbnail" alt="Character name here" />
                    </a>
                </div>
                <div class="my-1">
                    <a href="link" class="h5 mb-0">Character name here</a>
                </div>
                <p>Drawing this character will grant you (currency here)</p>
            </div>
        </div>
    </div>
</div>
<div class="mb-4">
    <div class="row">
        <div class="col-md-3">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <h5 class="card-title">Account</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="{{ Auth::user()->url }}">Profile</a></li>
                    <li class="list-group-item"><a href="{{ url('account/settings') }}">User Settings</a></li>
                    <li class="list-group-item"><a href="{{ url('trades/open') }}">Trades</a></li>
                </ul>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <h5 class="card-title">Characters</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="{{ url('characters') }}">My Characters</a></li>
                    <li class="list-group-item"><a href="{{ url('characters/myos') }}">My MYO Slots</a></li>
                    <li class="list-group-item"><a href="{{ url('characters/transfers/incoming') }}">Character Transfers</a></li>
                </ul>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <h5 class="card-title">Inventory</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="{{ url('inventory') }}">My Inventory</a></li>
                    <li class="list-group-item"><a href="{{ Auth::user()->url . '/item-logs' }}">Item Logs</a></li>
                </ul>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <h5 class="card-title">Bank</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="{{ url('bank') }}">Bank</a></li>
                    <li class="list-group-item"><a href="{{ Auth::user()->url . '/currency-logs' }}">Currency Logs</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- <div class="row">
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-body text-center">
                <img src="{{ asset('images/account.png') }}" alt="Account" />
                <h5 class="card-title">Account</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="{{ Auth::user()->url }}">Profile</a></li>
                <li class="list-group-item"><a href="{{ url('account/settings') }}">User Settings</a></li>
                <li class="list-group-item"><a href="{{ url('trades/open') }}">Trades</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-body text-center">
                <img src="{{ asset('images/characters.png') }}" alt="Characters" />
                <h5 class="card-title">Characters</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="{{ url('characters') }}">My Characters</a></li>
                <li class="list-group-item"><a href="{{ url('characters/myos') }}">My MYO Slots</a></li>
                <li class="list-group-item"><a href="{{ url('characters/transfers/incoming') }}">Character Transfers</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-body text-center">
                <img src="{{ asset('images/inventory.png') }}" alt="Inventory" />
                <h5 class="card-title">Inventory</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="{{ url('inventory') }}">My Inventory</a></li>
                <li class="list-group-item"><a href="{{ Auth::user()->url . '/item-logs' }}">Item Logs</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body text-center">
                <img src="{{ asset('images/currency.png') }}" alt="Bank" />
                <h5 class="card-title">Bank</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="{{ url('bank') }}">Bank</a></li>
                <li class="list-group-item"><a href="{{ Auth::user()->url . '/currency-logs' }}">Currency Logs</a></li>
            </ul>
        </div>
    </div>
</div> -->

@include('widgets._recent_gallery_submissions', ['gallerySubmissions' => $gallerySubmissions])
