<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::prefix('/shop')->group(function () {
    Route::get('/cart',function(){
        return view('shop/cart'); //cart.blade.php
    });
    Route::get('/checkout',function(){
        return view('shop/checkout'); //checkout.blade.php
    });
    Route::get('/compare',function(){
        return view('shop/compare'); //compare.blade.php
    }); 
    Route::get('/my-account',function(){
        return view('shop/my-account'); //my-account.blade.php
    }); 
    Route::get('/product-categories-4-column-sidebar',function(){
        return view('shop/product-categories-4-column-sidebar'); //product-categories-4-column-sidebar.blade.php
    }); 
    Route::get('/product-categories-5-column-sidebar',function(){
        return view('shop/product-categories-5-column-sidebar'); //product-categories-5-column-sidebar.blade.php
    }); 
    Route::get('/product-categories-6-column-full-width',function(){
        return view('shop/product-categories-6-column-full-width'); //product-categories-6-column-full-width.blade.php
    }); 
    Route::get('/product-categories-7-column-full-width',function(){
        return view('shop/product-categories-7-column-full-width'); //product-categories-7-column-full-width.blade.
    }); 
    Route::get('/shop-3-columns-sidebar',function(){
        return view('shop/shop-3-columns-sidebar'); //shop-3-columns-sidebar.blade.php
    }); 
    Route::get('/shop-4-columns-sidebar',function(){
        return view('shop/shop-4-columns-sidebar'); //shop-4-columns-sidebar.blade.php
    }); 
    Route::get('/shop-5-columns-sidebar',function(){
        return view('shop/shop-5-columns-sidebar'); //shop-5-columns-sidebar.blade.php
    }); 
    Route::get('/shop-6-columns-full-width',function(){
        return view('shop/shop-6-columns-full-width'); //shop-6-columns-full-width.blade.php
    }); 
    Route::get('/shop-7-columns-full-width',function(){
        return view('shop/shop-7-columns-full-width'); //shop7-columns-full-width.blade.php
    }); 
    Route::get('/shop-full-width',function(){
        return view('shop/shop-full-width'); //shop-full-width.blade.php
    }); 
    Route::get('/shop-grid-extended',function(){
        return view('shop/shop-grid-extended'); //shop-grid-extended.blade.php
    }); 
    Route::get('/shop-grid',function(){
        return view('shop/shop-grid'); //shop-grid.blade.php
    }); 
    Route::get('/shop-left-sidebar',function(){
        return view('shop/shop-left-sidebar'); //shop-left-sidebar.blade.php
    }); 
    Route::get('/shop-list-view-small',function(){
        return view('shop/shop-list-view-small'); //shop-list-view-small.blade.php
    }); 
    Route::get('/shop-list-view',function(){
        return view('shop/shop-list-view'); //shop-list-view.blade.php
    }); 
    Route::get('/shop-right-sidebar',function(){
        return view('shop/shop-right-sidebar'); //shop-right-sidebar.blade.php
    }); 
    Route::get('/shop',function(){
        return view('shop/shop'); //shop.blade.php
    }); 
    Route::get('/',function(){
        return view('shop/');
    }); 

});


Route::get('/faq', function () {
    return view('faq'); //faq.blade.php
});
