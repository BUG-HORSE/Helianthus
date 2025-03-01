@extends('guidebook.layout')

@section('guidebook-title')
    Home
@endsection

@section('content')
    {!! breadcrumbs(['Guidebook' => 'guidebook', 'Traits overview' => 'world/traits-overview']) !!}

    <h1>Trait Overview</h1>
    <div class="card">
        <div class="card-body" style="text-align: center;">
            <p>These are all available traits in Helianthus. Traits are split into categories, and each category has a set of traits that can be applied to your Silken.</p>
        </div>
    </div>
    <p></p>
    <div class="card">
        <h4 class="card-header" style="text-align: center">Coat colors</h4>
        <div class="card-body">
            <p>Coat colors are the base color of your Silken. </p>
            <br>
            <p><b>Common</b></p>
            <ul>
                <li><a href="link">Bay</a> (ee_)</li>
                <li><a href="link">Black</a> (E_A)</li>
                <li><a href="link">Chestnut</a> (E_aa)</li>
            </ul>
            <p><b>Uncommon</b></p>
            <ul>
                <li><a href="link">Mushroom</a> (Mu_)</li>
                <li><a href="link">Cream</a> (Cr_)</li>
                <li><a href="link">Champagne</a> (Ch_)</li>
            </ul>
        </div>
    </div>

    <p></p>
    <div class="card">
        <h4 class="card-header" style="text-align: center">Markings</h4>
        <div class="card-body">
            <p><a href="link">Free white markings</a> can be added to any Silken, regardless of rarity. It does not affect the genotype</p>
            <p><b>Common</b></p>
            <ul>
                <li><a href="link">Splash</a></li>
                <li><a href="link">Tobiano</a></li>
                <li><a href="link">Snowflake</a></li>
            </ul>
            <p><b>Uncommon</b></p>
            <ul>
                <li><a href="link">Roan</a></li>
            </ul>
            <p><b>Rare</b></p>
            <ul>
                <li><a href="link">Overo</a></li>
            </ul>
        </div>
    </div>

    <p></p>
    <div class="card">
        <h4 class="card-header" style="text-align: center">Modifiers</h4>
        <div class="card-body">
            <p><a href="link">Dapples</a> can be added to any Silken, regardless of rarity. It does not affect the genotype</p>
            <p><b>Common</b></p>
            <ul>
                <li><a href="link">Dun</a></li>
                <li><a href="link">Grey</a></li>
                <li><a href="link">Sooty</a></li>
                <li><a href="link">Pangare</a></li>
                <li><a href="link">Flaxen</a></li>
                <li><a href="link">Silver</a></li>
            </ul>
            <p><b>Uncommon</b></p>
            <ul>
                <li><a href="link">text</a></li>
            </ul>
        </div>
    </div>

    <p></p>
    <div class="card">
        <h4 class="card-header" style="text-align: center">Abberations</h4>
        <div class="card-body">
            <p>It's unknown why these abberations happen, though it is supspected that it's cause of the recent Meteor crash</p>
            <p><b>Eye Abberations</b></p>
            <ul>
                <li><a href="link">Moonblind</a></li>
                <li><a href="link">Polycoria</a></li>
                <li><a href="link">Eyeless</a></li>
            </ul>
            <p><b>Body Abberations</b></p>
            <ul>
                <li><a href="link">Leucism / Albinism / Melanistic</a></li>
                <li><a href="link">Polydactyl</a></li>
                <li><a href="link">Tailless</a></li>
            </ul>
        </div>
    </div>
@endsection
