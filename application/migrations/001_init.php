<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_init extends CI_Migration {

    public function up() {
        // Drop table 'groups' if it exists
        $this->dbforge->drop_table('groups', TRUE);
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'MEDIUMINT',
                'constraint' => '8',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => '20',
            ),
            'description' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('groups');
        $data = array(
            array(
                'id' => '1',
                'name' => 'admin',
                'description' => 'Administrator'
            ),
            array(
                'id' => '2',
                'name' => 'members',
                'description' => 'General User'
            )
        );
        $this->db->insert_batch('groups', $data);

        // Drop table 'users' if it exists
        $this->dbforge->drop_table('users', TRUE);
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'MEDIUMINT',
                'constraint' => '8',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'ip_address' => array(
                'type' => 'VARCHAR',
                'constraint' => '16'
            ),
            'username' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => '80',
            ),
            'salt' => array(
                'type' => 'VARCHAR',
                'constraint' => '40'
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
            ),
            'activation_code' => array(
                'type' => 'VARCHAR',
                'constraint' => '40',
                'null' => TRUE
            ),
            'forgotten_password_code' => array(
                'type' => 'VARCHAR',
                'constraint' => '40',
                'null' => TRUE
            ),
            'forgotten_password_time' => array(
                'type' => 'INT',
                'constraint' => '11',
                'unsigned' => TRUE,
                'null' => TRUE
            ),
            'remember_code' => array(
                'type' => 'VARCHAR',
                'constraint' => '40',
                'null' => TRUE
            ),
            'created_on' => array(
                'type' => 'INT',
                'constraint' => '11',
                'unsigned' => TRUE,
            ),
            'last_login' => array(
                'type' => 'INT',
                'constraint' => '11',
                'unsigned' => TRUE,
                'null' => TRUE
            ),
            'active' => array(
                'type' => 'TINYINT',
                'constraint' => '1',
                'unsigned' => TRUE,
                'null' => TRUE
            ),
            'first_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => TRUE
            ),
            'last_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => TRUE
            ),
            'company' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE
            ),
            'phone' => array(
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => TRUE
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('users');

        $data = array(
            'id' => '1',
            'ip_address' => '127.0.0.1',
            'username' => 'administrator',
            'password' => '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36',
            'salt' => '',
            'email' => 'admin@admin.com',
            'activation_code' => '',
            'forgotten_password_code' => NULL,
            'created_on' => '1268889823',
            'last_login' => '1268889823',
            'active' => '1',
            'first_name' => 'Admin',
            'last_name' => 'istrator',
            'company' => 'ADMIN',
            'phone' => '0',
        );
        $this->db->insert('users', $data);


        // Drop table 'users_groups' if it exists
        $this->dbforge->drop_table('users_groups', TRUE);
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'MEDIUMINT',
                'constraint' => '8',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'user_id' => array(
                'type' => 'MEDIUMINT',
                'constraint' => '8',
                'unsigned' => TRUE
            ),
            'group_id' => array(
                'type' => 'MEDIUMINT',
                'constraint' => '8',
                'unsigned' => TRUE
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('users_groups');

        $data = array(
            array(
                'id' => '1',
                'user_id' => '1',
                'group_id' => '1',
            ),
            array(
                'id' => '2',
                'user_id' => '1',
                'group_id' => '2',
            )
        );
        $this->db->insert_batch('users_groups', $data);


        // Drop table 'login_attempts' if it exists
        $this->dbforge->drop_table('login_attempts', TRUE);
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'MEDIUMINT',
                'constraint' => '8',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'ip_address' => array(
                'type' => 'VARCHAR',
                'constraint' => '16'
            ),
            'login' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE
            ),
            'time' => array(
                'type' => 'INT',
                'constraint' => '11',
                'unsigned' => TRUE,
                'null' => TRUE
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('login_attempts');

        // Drop table 'languages' if it exists
        $this->dbforge->drop_table('languages', TRUE);
        $this->dbforge->add_field(array(
            'lang_id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'lang_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'lang_icon' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'lang_abbreviation' => array(
                'type' => 'VARCHAR',
                'constraint' => '10',
            ),
        ));
        $this->dbforge->add_field('language_created_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP');
        $this->dbforge->add_key('lang_id', TRUE);
        $this->dbforge->create_table('languages');

        $data = array(
            array(
                'lang_name' => 'English',
                'lang_icon' => 'test.png',
                'lang_abbreviation' => 'en',
            ),
            array(
                'lang_name' => 'Greek',
                'lang_icon' => 'test.png',
                'lang_abbreviation' => 'gr',
            ),
        );
        $this->db->insert_batch('languages', $data);

        // Drop table 'locations' if it exists
        $this->dbforge->drop_table('locations', TRUE);
        $this->dbforge->add_field(array(
            'location_id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'location_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
        ));
        $this->dbforge->add_field('location_created_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP');
        $this->dbforge->add_key('location_id', TRUE);
        $this->dbforge->create_table('locations');

        $data = array(
            array(
                'location_name' => 'Sarti',
            ),
            array(
                'location_name' => 'Sikia',
            ),
        );
        $this->db->insert_batch('locations', $data);

        // Drop table 'locations' if it exists
        $this->dbforge->drop_table('location_locales', TRUE);
        $this->dbforge->add_field(array(
            'location_locale_id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'location_id' => array(
                'type' => 'INT',
            ),
            'lang_id' => array(
                'type' => 'INT',
            ),
            'location_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            )
        ));
        $this->dbforge->add_field('location_locale_created_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP');
        $this->dbforge->add_key('location_locale_id', TRUE);
        $this->dbforge->create_table('location_locales');
        $data = array(
            array(
                'location_id' => '1',
                'lang_id' => '1',
                'location_name' => 'Sarti'
            ),
            array(
                'location_id' => '1',
                'lang_id' => '2',
                'location_name' => 'Sarti'
            ),
            array(
                'location_id' => '2',
                'lang_id' => '1',
                'location_name' => 'Sikia'
            ),
            array(
                'location_id' => '2',
                'lang_id' => '2',
                'location_name' => 'Sikia'
            ),
        );
        $this->db->insert_batch('location_locales', $data);

        // Drop table 'facilities' if it exists
        $this->dbforge->drop_table('facilities', TRUE);
        $this->dbforge->add_field(array(
            'facility_id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'facility_type' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'facility_icon' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
        ));
        $this->dbforge->add_field('facility_created_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP');
        $this->dbforge->add_key('facility_id', TRUE);
        $this->dbforge->create_table('facilities');

        $data = array(
            array(
                'facility_type' => 'Hair Dryer',
                'facility_icon' => 'test.png',
            ),
            array(
                'facility_type' => 'Wifi',
                'facility_icon' => 'test.png',
            ),
        );
        $this->db->insert_batch('facilities', $data);

        $this->dbforge->drop_table('facility_locales', TRUE);
        $this->dbforge->add_field(array(
            'facility_locale_id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'facility_id' => array(
                'type' => 'INT',
            ),
            'facility_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '150',
            ),
            'lang_id' => array(
                'type' => 'INT',
            ),
        ));
        $this->dbforge->add_field('facility_locale_created_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP');
        $this->dbforge->add_key('facility_locale_id', TRUE);
        $this->dbforge->create_table('facility_locales');
        $data = array(
            array(
                'facility_id' => '1',
                'lang_id' => '1',
                'facility_name' => 'Hair Dryer'
            ),
            array(
                'facility_id' => '1',
                'lang_id' => '2',
                'facility_name' => 'Hair Dryer'
            ),
            array(
                'facility_id' => '2',
                'lang_id' => '1',
                'facility_name' => 'Wifi'
            ),
            array(
                'facility_id' => '2',
                'lang_id' => '2',
                'facility_name' => 'Wifi'
            ),
        );
        $this->db->insert_batch('facility_locales', $data);

        // Drop table 'hotels' if it exists
        $this->dbforge->drop_table('hotels', TRUE);
        $this->dbforge->add_field(array(
            'hotel_id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'hotel_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'package_id' => array(
                'type' => 'INT',
                'constraint' => '2',
            ),
            'location_id' => array(
                'type' => 'INT',
                'constraint' => '2',
            ),
            'distance_from_sea' => array(
                'type' => 'VARCHAR',
                'constraint' => '200',
                'default' => '0'
            ),
            'distance_from_center' => array(
                'type' => 'VARCHAR',
                'constraint' => '200',
                'default' => '0'
            ),
            'distance_from_sea' => array(
                'type' => 'VARCHAR',
                'constraint' => '200',
            ),
            'minimum_stay' => array(
                'type' => 'INT',
            ),
            'stars' => array(
                'type' => 'INT',
                'constraint' => '1',
            ),
            'keys' => array(
                'type' => 'INT',
                'constraint' => '1',
            ),
            'longitude' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'latitude' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'hotel_thumb' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'hotel_featured' => array(
                'type' => 'INT',
                'constraint' => '1',
                'default' => '0'
            ),
            'hotel_active' => array(
                'type' => 'INT',
                'constraint' => '1',
            ),
        ));
        $this->dbforge->add_field('hotel_created_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP');
        $this->dbforge->add_key('hotel_id', TRUE);
        $this->dbforge->create_table('hotels');

        // Drop table 'hotel_s_locales' if it exists
        $this->dbforge->drop_table('hotel_images', TRUE);
        $this->dbforge->add_field(array(
            'hotel_image_id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'hotel_id' => array(
                'type' => 'INT',
                'constraint' => '10',
            ),
            'image_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'image_original_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'is_thumb' => array(
                'type' => 'INT',
                'constraint' => '1',
            ),
        ));
        $this->dbforge->add_field('hotel_image_created_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP');
        $this->dbforge->add_key('hotel_image_id', TRUE);
        $this->dbforge->create_table('hotel_images');

        // Drop table 'hotel_s_locales' if it exists
        $this->dbforge->drop_table('hotel_locales', TRUE);
        $this->dbforge->add_field(array(
            'hotel_locale_id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'hotel_id' => array(
                'type' => 'INT',
                'constraint' => '10',
            ),
            'hotel_short_description' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'hotel_long_description' => array(
                'type' => 'TEXT'
            ),
            'hotel_seo_title' => array(
                'type' => 'TEXT'
            ),
            'hotel_seo_meta_description' => array(
                'type' => 'TEXT'
            ),
            'hotel_seo_keywords' => array(
                'type' => 'TEXT'
            ),
            'hotel_friendly_url' => array(
                'type' => 'TEXT'
            ),
            'lang_id' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
        ));
        $this->dbforge->add_field('hotel_locale_created_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP');
        $this->dbforge->add_key('hotel_locale_id', TRUE);
        $this->dbforge->create_table('hotel_locales');

        // Drop table 'hotel_facilities' if it exists
        $this->dbforge->drop_table('hotel_facilities', TRUE);
        $this->dbforge->add_field(array(
            'hotel_facility_id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'hotel_id' => array(
                'type' => 'INT',
            ),
            'facility_id' => array(
                'type' => 'INT',
            ),
            'is_main' => array(
                'type' => 'INT',
            ),
        ));
        $this->dbforge->add_field('hotel_facility_created_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP');
        $this->dbforge->add_key('hotel_facility_id', TRUE);
        $this->dbforge->create_table('hotel_facilities');

        // Drop table 'room_types' if it exists
        $this->dbforge->drop_table('room_types', TRUE);
        $this->dbforge->add_field(array(
            'room_type_id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'room_type_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
        ));
        $this->dbforge->add_field('room_type_created_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP');
        $this->dbforge->add_key('room_type_id', TRUE);
        $this->dbforge->create_table('room_types');
        $data = array(
            array(
                'room_type_name' => 'Single Room',
            ),
            array(
                'room_type_name' => 'Double Room',
            ),
        );
        $this->db->insert_batch('room_types', $data);

        // Drop table 'boards' if it exists
        $this->dbforge->drop_table('boards', TRUE);
        $this->dbforge->add_field(array(
            'board_id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'board_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
        ));
        $this->dbforge->add_field('board_created_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP');
        $this->dbforge->add_key('board_id', TRUE);
        $this->dbforge->create_table('boards');
        $data = array(
            array(
                'board_name' => 'Room Only',
            ),
            array(
                'board_name' => 'Breakfast',
            ),
        );
        $this->db->insert_batch('boards', $data);


        // Drop table 'ground plans' if it exists
        $this->dbforge->drop_table('ground_plans', TRUE);
        $this->dbforge->add_field(array(
            'ground_plan_id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'ground_plan_image' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'ground_plan_original_image' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
        ));
        $this->dbforge->add_field('ground_plan_created_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP');
        $this->dbforge->add_key('ground_plan_id', TRUE);
        $this->dbforge->create_table('ground_plans');

        // Drop table 'rooms' if it exists
        $this->dbforge->drop_table('rooms', TRUE);
        $this->dbforge->add_field(array(
            'room_id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'hotel_id' => array(
                'type' => 'INT',
                'constraint' => '10',
            ),
            'ground_plan_id' => array(
                'type' => 'INT',
            ),
            'room_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'room_type_id' => array(
                'type' => 'INT',
                'constraint' => '10',
            ),
            'board_id' => array(
                'type' => 'INT',
                'constraint' => '10',
            ),
            'room_package_id' => array(
                'type' => 'INT',
                'constraint' => '10',
            ),
            'min_adults' => array(
                'type' => 'INT',
                'constraint' => '2',
            ),
            'max_adults' => array(
                'type' => 'INT',
                'constraint' => '2',
            ),
            'floor' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'sea_view' => array(
                'type' => 'INT',
                'constraint' => '1',
            ),
            'room_thumb' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'room_active' => array(
                'type' => 'INT',
                'constraint' => '1',
                'default' => '0'
            ),
            'room_featured' => array(
                'type' => 'INT',
                'constraint' => '1',
                'default' => '0'
            ),
        ));
        $this->dbforge->add_field('room_created_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP');
        $this->dbforge->add_key('room_id', TRUE);
        $this->dbforge->create_table('rooms');

        // Drop table 'room_images' if it exists
        $this->dbforge->drop_table('room_images', TRUE);
        $this->dbforge->add_field(array(
            'room_image_id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'room_id' => array(
                'type' => 'INT',
                'constraint' => '10',
            ),
            'image_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'image_original_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'is_thumb' => array(
                'type' => 'INT',
                'constraint' => '1',
            ),
        ));
        $this->dbforge->add_field('room_image_created_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP');
        $this->dbforge->add_key('room_image_id', TRUE);
        $this->dbforge->create_table('room_images');

        // Drop table 'room_locales' if it exists
        $this->dbforge->drop_table('room_locales', TRUE);
        $this->dbforge->add_field(array(
            'room_locale_id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'room_id' => array(
                'type' => 'INT',
            ),
            'lang_id' => array(
                'type' => 'INT',
            ),
            'room_short_description' => array(
                'type' => 'TEXR',
            ),
            'room_description' => array(
                'type' => 'TEXT',
            ),
            'room_seo_title' => array(
                'type' => 'TEXT'
            ),
            'room_seo_meta_description' => array(
                'type' => 'TEXT'
            ),
            'room_seo_keywords' => array(
                'type' => 'TEXT'
            ),
            'room_friendly_url' => array(
                'type' => 'TEXT'
            ),
        ));
        $this->dbforge->add_field('room_locale_created_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP');
        $this->dbforge->add_key('room_locale_id', TRUE);
        $this->dbforge->create_table('room_locales');

        // Drop table 'room_locales' if it exists
        $this->dbforge->drop_table('room_facilities', TRUE);
        $this->dbforge->add_field(array(
            'room_facility_id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'facility_id' => array(
                'type' => 'INT',
            ),
            'room_id' => array(
                'type' => 'INT',
            ),
        ));
        $this->dbforge->add_field('room_facility_created_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP');
        $this->dbforge->add_key('room_facility_id', TRUE);
        $this->dbforge->create_table('room_facilities');

        // Drop table 'room_locales' if it exists
        $this->dbforge->drop_table('packages', TRUE);
        $this->dbforge->add_field(array(
            'package_id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'package_type' => array(
                'type' => 'VARCHAR',
                'constraint' => '150',
            ),
            'is_allotment' => array(
                'type' => 'INT',
                'default' => '0',
            ),
            'is_package_type' => array(
                'type' => 'INT',
                'default' => '1',
            ),
            
        ));
        $this->dbforge->add_field('package_created_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP');
        $this->dbforge->add_key('package_id', TRUE);
        $this->dbforge->create_table('packages');

        // Drop table 'room_locales' if it exists
        $this->dbforge->drop_table('package_locales', TRUE);
        $this->dbforge->add_field(array(
            'package_locale_id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'package_id' => array(
                'type' => 'INT',
            ),
            'package_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'lang_id' => array(
                'type' => 'INT',
            ),
        ));
        $this->dbforge->add_field('package_locale_created_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP');
        $this->dbforge->add_key('package_locale_id', TRUE);
        $this->dbforge->create_table('package_locales');

        // Drop table 'package_days' if it exists
        $this->dbforge->drop_table('package_periods', TRUE);
        $this->dbforge->add_field(array(
            'package_period_id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'package_id' => array(
                'type' => 'INT',
            ),
            'period_from' => array(
                'type' => 'DATE',
            ),
            'period_to' => array(
                'type' => 'DATE',
            ),
            'package_active' => array(
                'type' => 'INT'
            )
        ));
        $this->dbforge->add_field('package_periods_created_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP');
        $this->dbforge->add_key('package_period_id', TRUE);
        $this->dbforge->create_table('package_periods');

        // Drop table 'package_days' if it exists
        $this->dbforge->drop_table('room_package_prices', TRUE);
        $this->dbforge->add_field(array(
            'room_package_price_id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'package_period_id' => array(
                'type' => 'INT',
            ),
            'room_id' => array(
                'type' => 'INT',
            ),
            'adults' => array(
                'type' => 'INT',
            ),
            'price' => array(
                'type' => 'FLOAT',
            ),
            'special_offer' => array(
                'type' => 'FLOAT',
            ),
            'early_booking' => array(
                'type' => 'FLOAT',
            ),
            'early_booking_until' => array(
                'type' => 'DATE',
            ),
            'is_active' => array(
                'type' => 'INT',
                'default' => 1
            ),
        ));
        $this->dbforge->add_field('room_package_price_created_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP');
        $this->dbforge->add_key('room_package_price_id', TRUE);
        $this->dbforge->create_table('room_package_prices');


        // Drop table 'room_locales' if it exists
        $this->dbforge->drop_table('clients', TRUE);
        $this->dbforge->add_field(array(
            'client_id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'client_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'client_surname' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'client_email' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'client_phone' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'client_location' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
        ));
        $this->dbforge->add_field('client_created_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP');
        $this->dbforge->add_key('client_id', TRUE);
        $this->dbforge->create_table('clients');

        // Drop table 'room_locales' if it exists
        $this->dbforge->drop_table('bookings', TRUE);
        $this->dbforge->add_field(array(
            'booking_id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'hotel_id' => array(
                'type' => 'INT',
            ),
            'room_id' => array(
                'type' => 'INT',
            ),
            'client_id' => array(
                'type' => 'INT',
            ),
            'checkin' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'checkout' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'price' => array(
                'type' => 'float',
            ),
        ));
        $this->dbforge->add_field('booking_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP');
        $this->dbforge->add_key('booking_id', TRUE);
        $this->dbforge->create_table('bookings');
    }

    public function down() {
        $this->dbforge->drop_table('users', TRUE);
        $this->dbforge->drop_table('groups', TRUE);
        $this->dbforge->drop_table('users_groups', TRUE);
        $this->dbforge->drop_table('login_attempts', TRUE);
    }

}
