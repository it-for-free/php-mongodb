<?php
namespace  ItForFree\MongoDB;

use MongoDB\BSON\ObjectID;

/**
 * Различные функции для работы с MongoDB
 */
class MongoDbHelper {
   
    /**
     *  Вернёт массив ObjectId из массива строк
     * 
     * @param string[] $strIdsArray
     * @return MongoDB\BSON\ObjectID[]
     */
    public static function getObjectIdsByString($strIdsArray)
    {
        $result  = array();
        foreach($strIdsArray as $id) {
            $result[] = new ObjectID($id);
        }
        return $result;
    }
}
