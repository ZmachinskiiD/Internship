<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();


class CMyComponentName extends CBitrixComponent
{

    public function executeComponent()
    {
		$this->arResult['NEWS']=['СУПЕР НОВСТЬ','ПЛОХАЯ НОВОСТЬ'];
        $this->IncludeComponentTemplate();
    }
}
