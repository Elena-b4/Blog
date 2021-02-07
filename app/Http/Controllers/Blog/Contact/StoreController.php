<?php

namespace App\Http\Controllers\Blog\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerStoreRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(CustomerStoreRequest $request)
    {
        $data = $request->validated();
        Customer::create($data);
        return 'success';
    }
}
