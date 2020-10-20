<?php
namespace SDN3Q\Request\Categories;

use SDN3Q\Request\BaseRequest;

class Categories extends BaseRequest
{
    use \SDN3Q\Request\UploadRequest;

    protected static $endpoint = 'categories';

    /**
     * Return a collection of available Categories
     * @throws \SDN3Q\Exception\NotImplemented
     */
    public static function getCategories()
    {
        throw new \SDN3Q\Exception\NotImplemented();
    }

    /**
     * Return a Category
     *
     * @param int $categoryId
     *
     * @throws \SDN3Q\Exception\NotImplemented
     */
    public static function getCategorie(int $categoryId)
    {
        parent::$subUrl = $categoryId ;

        throw new \SDN3Q\Exception\NotImplemented();
    }

    /**
     * Change proprties of Category
     * PUT /api/v2/categories/{CategoryId}/picture
     *
     * @param int $categoryId
     * @param array $parm
     *
     * @throws \SDN3Q\Exception\NotImplemented
     */
    public static function changeCategorie(int $categoryId, $parm = [])
    {
        parent::$subUrl = $categoryId ;
        self::$method = 'put';

        throw new \SDN3Q\Exception\NotImplemented();
    }

    /**
     * Put a Category Picture
     *
     * @param int $categoryId
     * @param string $imagePath
     *
     * @throws \SDN3Q\Exception\NotImplemented
     */
    public static function addCategoriePicture(int $categoryId, string $imagePath)
    {
        parent::$subUrl = $categoryId . '/picture';
        self::$method = 'put';
        self::$allowedUploadMimeType = ['image/jpeg', 'image/png'];

        $mime = self::checkMimeType($imagePath);

        self::$additionalHeader["Content-type"] = $mime;

        throw new \SDN3Q\Exception\NotImplemented();
    }
}
