<?php

use \yii\db\Migration;

class m190124_110200_add_verification_token_column_to_user_table extends Migration
{
    public function up()
    {
        $this->addColumn('{{%farhan_1811081034}}', 'verification_token', $this->string()->defaultValue(null));
    }

    public function down()
    {
        $this->dropColumn('{{%farhan_1811081034}}', 'verification_token');
    }
}
