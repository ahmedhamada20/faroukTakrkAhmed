<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\RequestPriceOffer;
use App\Models\RequestProduct;
use Illuminate\Http\Request;

class ProductRequestOrderController extends Controller
{
    public function index()
    {
        $data = [
            "data" => RequestPriceOffer::get(),
        ];

        return view('backend.product_request.index', $data);
    }

    public function deleted_product_request(Request $request)
    {
        RequestPriceOffer::destroy($request->id);
        toastr()->success('Done Deleted Successfully');
        return redirect()->back();
    }

    public function all_order()
    {
        $data = [
            "data" => RequestProduct::where('status',1),
            'contacts' => Contact::where('status', 1)->get(),
        ];

        return view('backend.orders.index', $data);
    }
}
