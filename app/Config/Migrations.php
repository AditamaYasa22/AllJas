<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Migrations extends BaseConfig
{
    /**
     * --------------------------------------------------------------------------
     * Enable/Disable Migrations
     * --------------------------------------------------------------------------
     *
     * Migrations are enabled by default for development.
     * You should disable migrations in production environments.
     */
    public bool $enabled = true;

    /**
     * --------------------------------------------------------------------------
     * Migrations Table
     * --------------------------------------------------------------------------
     *
     * This is the name of the table that will store the current migrations state.
     * When migrations runs it will store in a database table which migration
     * files have already been run.
     */
    public string $table = 'migrations';

    /**
     * --------------------------------------------------------------------------
     * Timestamp Format
     * --------------------------------------------------------------------------
     *
     * This is the format that will be used when creating new migrations
     * using the CLI command:
     *   > php spark make:migration
     *
     * NOTE: if you set an unsupported format, migration runner will not find
     *       your migration files.
     *
     * Supported formats:
     * - YmdHis_
     * - Y-m-d-His_
     * - Y_m_d_His_
     */
    public string $timestampFormat = 'Y-m-d-His_';

    /**
     * --------------------------------------------------------------------------
     * Migrations Database Group
     * --------------------------------------------------------------------------
     *
     * This is the name of the database group to use for migration tables.
     * The default is the primary database group.
     */
    public string $DBGroup = 'default';

    /**
     * --------------------------------------------------------------------------
     * Migrations Path
     * --------------------------------------------------------------------------
     *
     * Path to your migrations folder.
     * Typically, it will be within your application path.
     * Also can be set to a full server path.
     */
    public string $path = APPPATH . 'Database/Migrations/';
}