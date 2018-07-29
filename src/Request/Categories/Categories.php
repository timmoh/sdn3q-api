<?php
namespace SDN3Q\Request\Categories;

use SDN3Q\Request\BaseRequest;

/*
GET /api/v2/categories Return a collection of available Categories
/api/v2/categories/{CategoryId}
GET /api/v2/categories/{CategoryId} Return a Category
PUT /api/v2/categories/{CategoryId} Change proprties of Category
PUT /api/v2/categories/{CategoryId}/picture Put a Category Picture
*/

class Categories extends BaseRequest{
	protected static $endpoint ='categories';
	
	public static function getCategories(){
		throw new \SDN3Q\Exception\NotImplemented();
	}
	
	public static function getCategorie(int $categoryId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
	
	public static function changeCategorie(int $categoryId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
	
	public static function addCategoriePicture(int $categoryId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
}
