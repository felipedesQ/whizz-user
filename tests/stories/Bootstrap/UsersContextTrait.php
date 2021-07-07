<?php

namespace Whizz\Test\Stories\User\Bootstrap;

use Behat\Behat\Hook\Scope\AfterScenarioScope;
use Behat\Behat\Hook\Scope\BeforeScenarioScope;
use Ramsey\Uuid\Uuid;

trait UsersContextTrait
{
    /**
     * @BeforeScenario @user-get
     */
    function beforeCreateUser(BeforeScenarioScope $scope)
    {
        $this->truncateUsersTable();

        $this->readModelPdoConnection->getConnection('default')->exec(" INSERT INTO `users` (`id`, `email`, `status`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `uuid`, `first_name`, `last_name`, `phone`, `api_key`, `api_key_expires_at`, `created_at`, `modified_at`) VALUES 
        ('3906', 'test@whizz.com', '1', '777d6e541f5b1568f79d24574d252888', 'p@ssword1', NULL, NULL, NULL, 'af75eac3-949a-4f79-bf8a-b2d961d37427', 'Jane', 'Doe', NULL, '67dbb8ae11f3de399558a2ec66d244bc', '2120-01-24 03:14:09', '2021-07-06 08:55:32', '2021-07-06 03:11:18') 
        ,('3907', 'dev@whizz.com', '1', '777d6e541f5b1568f79d24574d252888', 'p@ssword2', NULL, NULL, NULL, 'bf75eac3-949a-4f75-bf8a-b2d961d37428', 'John', 'Doe', NULL, '27dbb8ae1af32e399558a2ec66d244bc', '2120-01-24 03:14:09', '2021-07-06 08:55:32', '2021-07-06 08:55:32')
        ");

        $this->readModelPdoConnection->getConnection('default')->exec('
INSERT INTO users(id, uuid, first_name, last_name, password, salt, api_key_expires_at, api_key, email, timezone, created_at, updated_at, version, is_active) VALUES
  (1, "' . Uuid::fromString("af75eac3-949a-4f79-bf8a-b2d961d37427")->getBytes() .'", "Jane", "Doe", "$2y$13$ikXFnoUfIQdmLvebM9reRekEH3yf7w116eUlUK7pnv3LzeRITVnae", "d41d8cd98f00b204e9800998ecf8427e", "2040-01-01 00:00:00", "67dbb8ae11f3de399558a2ec66d244bc", "test@kegstar.com", "Australia/Sydney", NOW(), NOW(), 1, 1)
        ');

    }

    /**
     * @AfterScenario @user-get
     */
    function afterCreateUser(AfterScenarioScope $scope)
    {
        $this->truncateUsersTable();
    }

    private function truncateUsersTable()
    {
        $this->readModelPdoConnection->getConnection('account')->exec("SET FOREIGN_KEY_CHECKS = 0;");
        $this->readModelPdoConnection->getConnection('account')->exec("TRUNCATE TABLE users");
        $this->readModelPdoConnection->getConnection('account')->exec("SET FOREIGN_KEY_CHECKS = 1;");

    }

}
