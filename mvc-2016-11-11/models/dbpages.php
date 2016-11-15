<?php
/**
 * Created by PhpStorm.
 * User: 32
 * Date: 11.11.2016
 * Time: 19:12
 */

class Dbpages extends Model {
    CONST DB_TABLE = 'pages';

    public function getByAlias($alias)
    {
        if (!empty($alias))
        {
            $alias = $this->db->escape($alias);
            $sql = "SELECT * FROM " . self::DB_TABLE . " WHERE `alias` = '{$alias}'";
            $page = $this->db->query($sql);
            echo '<p>Page: </p><pre>' . var_export($page, 1) . '</pre>';
        }
    }
}