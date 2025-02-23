<?php
    namespace App\Http\Controllers;

    use App\Models\Character\CharacterCategory;
    use App\Models\Currency\Currency;
    use App\Models\Feature\Feature;
    use App\Models\Feature\FeatureCategory;
    use App\Models\Item\Item;
    use App\Models\Item\ItemCategory;
    use App\Models\Rarity;
    use App\Models\Shop\Shop;
    use App\Models\Species\Species;
    use App\Models\Species\Subtype;
    use App\Models\User\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    class GuidebookController extends Controller
    {
    /*
    |--------------------------------------------------------------------------
    | Guidebook Controller
    |--------------------------------------------------------------------------
    |
    | Baby's first controller
    |
    */

    /**
     * Shows the index page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getIndex()
    {
        return view('guidebook.index');
    }
}
