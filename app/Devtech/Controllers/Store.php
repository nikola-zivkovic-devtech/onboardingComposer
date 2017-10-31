<?php
/**
 * Created by PhpStorm.
 * User: nikola.zivkovic
 * Date: 23-Oct-17
 * Time: 12:31
 */

namespace Devtech\Controllers;

use Devtech\Enums\NamespacePaths;

/**
 * class Store
 *
 * Controller that points to store handler classes and renders store item pages.
 */
class Store extends Controller
{
    private $furnitureItem;

    public function __construct($className)
    {
        parent::__construct();

        $className = NamespacePaths::STORE_PATH . $className;
        $this->furnitureItem = new $className($this->twig);
    }

    public function renderView()
    {
        echo $this->twig->render('store-item.html', array(
            'type' => $this->furnitureItem->type,
            'name' => $this->furnitureItem->name,
            'price' => $this->furnitureItem->price,
            'color' => $this->furnitureItem->color,
            'inStock' => $this->furnitureItem->inStock,
        ));
    }
}