<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
class Helper 
{
    // use :: $paginated_result = App\User::customPaginate($users,3);
    public static function customPaginate($items,$perPage)
{
    //Get current page form url e.g. &page=6
    $currentPage = LengthAwarePaginator::resolveCurrentPage();

    //Create a new Laravel collection from the array data
    $collection = new Collection($items);

    //Define how many items we want to be visible in each page
    $perPage = $perPage;

    //Slice the collection to get the items to display in current page
    $currentPageSearchResults = $collection->slice($currentPage * $perPage, $perPage)->all();

    //Create our paginator and pass it to the view
    $paginatedSearchResults = new LengthAwarePaginator($currentPageSearchResults, count($collection), $perPage);

   return $paginatedSearchResults;
}

public function paginate($items, $perPage = 15, $page = null, $options = [])
{
	$page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
	$items = $items instanceof Collection ? $items : Collection::make($items);
	return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
}
}
