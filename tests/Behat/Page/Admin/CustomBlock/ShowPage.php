<?php

namespace Tests\Lakion\SyliusCmsBundle\Behat\Page\Admin\CustomBlock;

use Sylius\Behat\Page\SymfonyPage;

class ShowPage extends SymfonyPage implements ShowPageInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBlockContents()
    {
        return $this->getElement('block')->getHtml();
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockImageUrl()
    {
        return $this->getElement('block')->find('css', 'img')->getAttribute('src');
    }

    /**
     * {@inheritdoc}
     */
    protected function getDefinedElements()
    {
        return array_merge(parent::getDefinedElements(), [
            'block' => '#lakion_sylius_cms_block_preview',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getRouteName()
    {
        return 'lakion_sylius_cms_admin_custom_block_show';
    }
}
