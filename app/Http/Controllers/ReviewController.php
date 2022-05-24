<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use App\Models\Product;
use App\Models\Review;

class ReviewController extends Controller
{

    public function index($product)
    {
        return Review::all()->where('product_id', $product);
    }

    public function create()
    {
        //
    }

    public function store(StoreReviewRequest $request)
    {
        //
    }


    public function show(Review $review)
    {
        //
    }


    public function edit(Review $review)
    {
        //
    }


    public function update(UpdateReviewRequest $request, Review $review)
    {
        //
    }

    public function destroy(Review $review)
    {
        //
    }
}
