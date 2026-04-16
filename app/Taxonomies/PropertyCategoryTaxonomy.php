<?php namespace App\Taxonomies;

class PropertyCategoryTaxonomy extends BaseTaxonomy
{
	protected function getTaxonomyKey(): string
    {
        return 'property-category';
    }

    protected function getSingular(): string
    {
        return 'Danh mục BĐS';
    }

    protected function getPlural(): string
    {
        return 'Danh mục BĐS';
    }

    protected function getPostTypes(): array
    {
        return ['property-for-sale', 'property-for-rent'];
    }

    protected function getArgs(): array
    {
        $args = parent::getArgs();
        $args['hierarchical'] = true;          
        $args['rewrite'] = ['slug' => 'danh-muc-bds'];
        return $args;
    }
}