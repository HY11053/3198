<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','Frontend\IndexController@Index');
Route::get('xm','Frontend\ListController@XmLists');
Route::get('xm/{id}','Frontend\ArticleController@BrandArticle')->where(['id'=>'[0-9]+']);
Route::get('xm/{id}/news','Frontend\ArticleController@BrandArticleNews')->where(['id'=>'[0-9]+']);
Route::get('xm/{id}/wenda','Frontend\ArticleController@BrandArticleAsks')->where(['id'=>'[0-9]+']);
Route::get('wenda/{id}','Frontend\ArticleController@NewsArticle')->where(['id'=>'[0-9]+']);
Route::get('news','Frontend\ListController@TopIndexArticleList');
Route::get('news/{id}','Frontend\ArticleController@NewsArticle')->where(['id'=>'[0-9]+']);
Route::get('news/{path}','Frontend\ListController@IndexArticleList')->where(['path'=>'[a-z]+']);;
Route::get('news/{path}/{id}','Frontend\ListController@NewsArticleList')->where(['path'=>'[a-z]+','id'=>'[0-9]+']);;
Route::get('zhishi','Frontend\ListController@TopIndexArticleList');
Route::get('zhishi/{id}','Frontend\ArticleController@NewsArticle')->where(['id'=>'[0-9]+']);
Route::get('zhishi/{path}','Frontend\ListController@IndexArticleList')->where(['path'=>'[a-z]+']);
Route::get('zhishi/{path}/{id}','Frontend\ListController@NewsArticleList')->where(['path'=>'[a-z]+','id'=>'[0-9]+']);
Route::get('search','Frontend\SearchController@Search');
Route::get('{path}','Frontend\ListController@TopbrandList')->where(['path'=>'[a-z]+']);;
Route::get('{path}/{id}','Frontend\ListController@BrandList')->where(['path'=>'[a-zA-Z]+','id'=>'[0-9]+']);
