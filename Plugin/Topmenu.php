<?php

namespace BelVG\HideMenu\Plugin;

class Topmenu
{
    public function beforeGetHtml(
        \Magento\Theme\Block\Html\Topmenu $subject,
        $outermostClass = '',
        $childrenWrapClass = '',
        $limit = 0
    )
    {
        // $subject->getMenu()->getAllChildNodes() // Getting all menu items
        foreach($subject->getMenu()->getChildren() as $menuItem){
            if(rand(0, 1)){ // <-- your condition here
                $menuItem->setIsParentActive(false);
            }
        }
    }
}