<?php

/**
 * RokGallery_Model_JobTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class RokGallery_Model_JobTable extends RokCommon_Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object RokGallery_Model_JobTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('RokGallery_Model_Job');
    }

    /**
     * @static
     * @throws Exception
     * @param  $id
     * @return RokGallery_Model_File
     */
    public static function getSingle($id)
    {
        try
        {
            $table = self::getInstance();
            return $table->find($id);
        }
        catch (Exception $e)
        {
            throw $e;
        }
    }
}