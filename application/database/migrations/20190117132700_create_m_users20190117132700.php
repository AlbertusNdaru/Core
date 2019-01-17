<?php

class Migration_create_m_users20190117132700 extends CI_Migration {

    public function up() {
        $this->load->helper('db_helper');
        $this->dbforge->add_field(array(
            'Id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'UserName' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
        ));
        
        $this->dbforge->add_key('Id', TRUE);
        $this->dbforge->create_table('m_users');
    }

    public function down() {
        //$this->dbforge->drop_table('m_users');
    }

}