<?php
    return [
        "paths" => [
            "migrations" => "migrations"
        ],
        "environments" => [
            "default_migration_table" => "phinxlog",
            "default_database" => "default",
            "default" => [
                "adapter" => "mysql",
                "host" => getenv('RDS_HOSTNAME'),
                "name" => getenv('RDS_DB_NAME'),
                "user" => getenv('RDS_USERNAME'),
                "pass" => ""            ]
        ]
    ];