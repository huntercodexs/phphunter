<?php

/**
 * @description: API Generated by phpHunter
 * @example: ProductsControl Sample
 * @methods: POST|GET|PUT|DELETE
 */

namespace Api\Hunter\Simple\Products;

class ProductsControl
{
    private $productsControl;
    private $methodClass;

    /**
     * @constructor: ProductsControl
    */
    public function __construct(ProductsControl $productsControl = null)
    {
        $this->productsControl = $productsControl;
    }

    /**
     * @methods: insertProductsControl [POST]
     */
    public function insertProductsControl()
    {
        //Create
        $this->methodClass = "CREATE";
    }

    /**
     * @methods: getProductsControl [GET]
     */
    public function getProductsControl()
    {
        //Read
        $this->methodClass = "READ";
    }

    /**
     * @methods: updateProductsControl [PUT]
     */
    public function updateProductsControl()
    {
        //Update
        $this->methodClass = "UPDATE";
    }

    /**
     * @methods: deleteProductsControl [DELETE]
     */
    public function deleteProductsControl()
    {
        //Delete
        $this->methodClass = "DELETE";
    }

    /**
     * @methods: apiResponse [RESPONSE]
     */
    public function apiResponse()
    {
        return json_encode(
            [
                'status' => 200,
                'message' => 'Api response success: ' . $this->productsControl,
                'method' => $_SERVER['REQUEST_METHOD'],
                'event'=> $this->methodClass,
                'request' => apache_request_headers()
            ]
        );
    }
}

?>

