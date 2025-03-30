<?php

namespace App\Http\Controllers;

use App\Http\Requests\IndexRequest;
use App\Http\Requests\ProductCreateRequest;
use App\Http\Requests\ProductStoreRequest;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Throwable;

class ProductController extends Controller
{
    public function index(IndexRequest $request)
    {
        $perPage = $request->input('per_page', 20);
        $products = Product::orderBy('sort', 'asc')->paginate($perPage);
        return response()->json($products);
    }

    public function show(Product $product)
    {
        return response()->json($product);
    }

    public function create(ProductCreateRequest $request)
    {
        $product = Product::create($request->validated());
        return response()->json($product, 201);
    }

    public function store(Product $product, ProductStoreRequest $request)
    {
        $validated = $request->validated();

        if (array_key_exists('sort', $validated) and $validated['sort'] !== $product->sort) {
            return $this->updateWithSort($product, $validated);
        }

        $product->update($validated);
        return response()->json($product);
    }

    private function updateWithSort(Product $product, array $validated)
    {
        $oldSort = (int)$product->sort;
        $newSort = (int)$validated['sort'];

        try {
            DB::transaction(function () use ($product, $validated, $oldSort, $newSort) {
                if ($newSort < $oldSort) {
                    Product::where('sort', '>=', $newSort)->where('sort', '<', $oldSort)->increment('sort');
                } else {
                    Product::where('sort', '>', $oldSort)->where('sort', '<=', $newSort)->decrement('sort');
                }

                $product->update($validated);
                return response()->json($product);
            });
        } catch (Throwable $e) {
            return response()->json(['message' => 'An error occurred while updating the product sort.'], 500);
        }
    }

    public function destroy($id)
    {
        Product::destroy($id);
        return response()->json(['message' => 'Product deleted.'], 204);
    }
}
