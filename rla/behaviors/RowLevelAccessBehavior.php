<?php

namespace nad\rla\behaviors;

use Yii;
use yii\base\Behavior;
use nad\rla\models\RowLevelAccess;
use yii\db\ActiveRecord;

class RowLevelAccessBehavior extends Behavior
{
    public function events() {
        return [
           ActiveRecord::EVENT_BEFORE_INSERT => 'setSeqAccessIdBeforeInsert',
           ActiveRecord::EVENT_AFTER_INSERT => 'grantAccess',
           ActiveRecord::EVENT_AFTER_DELETE => 'revokeAccess',
        ];
     }

     public function grantAccess($event) {
        if(!Yii::$app->user->can('superuser')){
           $userId = Yii::$app->user->id;
           // as request by Mr Sepahsalari this line is commented
         //   $expireDate = time() + RowLevelAccess::ROW_LEVEL_ACCESS_EXPIRE__DEFAULT_DURATION;
           $insertSql = 'INSERT INTO row_level_access (seq_access_id, user_id, access_type, expire_date) VALUES (:SEQ_ACCESS_ID, :USER_ID, :ACCESS_TYPE, :EXPIRE_DATE)';
           Yii::$app->db->createCommand($insertSql)->bindValues([
              ':SEQ_ACCESS_ID' => $this->owner->seq_access_id,
              ':USER_ID' => $userId,
              ':ACCESS_TYPE' => RowLevelAccess::ROW_LEVEL_ACCESS_TYPE_PERMANENT,
              ':EXPIRE_DATE' => null
            ])->execute();
        }
     }

     public function revokeAccess($event){
        if(!Yii::$app->user->can('superuser')){
            $userId = Yii::$app->user->id;
            $rowSeqId = $this->owner->seq_access_id;
            $deleteSql = 'DELETE FROM row_level_access WHERE seq_access_id = :ROW_SEQ_ID AND user_id = :USER_ID';
            Yii::$app->db->createCommand($deleteSql)->bindValues([
               ':ROW_SEQ_ID' => $rowSeqId,
               ':USER_ID' => $userId,
               ])->execute();
         }
     }

     public function setSeqAccessIdBeforeInsert(){
        $sql = 'SELECT NEXTVAL(seq_access)';
        $this->owner->seq_access_id = Yii::$app->db->createCommand($sql)->queryScalar();
     }
}
