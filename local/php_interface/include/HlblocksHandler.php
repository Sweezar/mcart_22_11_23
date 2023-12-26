<?php

AddEventHandler("highloadblock", "OnAfterAdd", "OnHighloadBlockElementAdd");
AddEventHandler("highloadblock", "OnAfterUpdate", "OnHighloadBlockElementUpdate");
AddEventHandler("highloadblock", "OnAfterDelete", "OnHighloadBlockElementDelete");

function OnHighloadBlockElementAdd(\Bitrix\Main\Entity\Event &$event) {
    $entity = $event->getEntity();
    $tableName = $entity->getDBTableName();
    $taggedCache = \Bitrix\Main\Application::getInstance()->getTaggedCache();
    $taggedCache->clearByTag('hlblock_table_name_' . $tableName);
}

function OnHighloadBlockElementUpdate(\Bitrix\Main\Entity\Event &$event) {
    $entity = $event->getEntity();
    $tableName = $entity->getDBTableName();
    $taggedCache = \Bitrix\Main\Application::getInstance()->getTaggedCache();
    $taggedCache->clearByTag('hlblock_table_name_' . $tableName);
}

function OnHighloadBlockElementDelete(\Bitrix\Main\Entity\Event &$event) {
    $entity = $event->getEntity();
    $tableName = $entity->getDBTableName();
    $taggedCache = \Bitrix\Main\Application::getInstance()->getTaggedCache();
    $taggedCache->clearByTag('hlblock_table_name_' . $tableName);
}