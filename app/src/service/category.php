<?php

namespace EMBL\Service;

class Category
{

    private $categoryRepository = null;

    public function __construct(\EMBL\Repository\Category $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function getCategories()
    {
        return $this->categoryRepository->getCategories();
    }

}