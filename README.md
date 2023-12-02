# Live Test 10

## Task 1

Declare a migration class called CreateUsersTable with a up method that adds a new column called phone_number of type string to the users table.
Use the following template:
<?php

class CreateUsersTable
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Add column here
        });
    }
}

## Task 2

Declare a migration class called RenameEmailColumn with a up method that renames the email column to new_email in the users table.
Use the following template:
<?php

class RenameEmailColumn
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Rename column here
        });
    }
}