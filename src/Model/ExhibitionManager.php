<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 07/03/18
 * Time: 18:20
 * PHP version 7
 */

namespace App\Model;

class ExhibitionManager extends AbstractManager
{
    /**
     *
     */
    const TABLE = 'exhibition';

    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
    }

    public function selectExhibition()
    {
        return $this->pdo->query('SELECT * FROM ' . $this->table . ' ORDER BY image')->fetchAll();
    }
}
