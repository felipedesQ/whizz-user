<?php

namespace Whizz\Test\Stories\User\Bootstrap;

use Behat\Behat\Hook\Scope\AfterScenarioScope;
use Behat\Behat\Hook\Scope\BeforeScenarioScope;
use Behatch\Json\Json;
use Ramsey\Uuid\Uuid;

trait SecurityContextTrait
{
    private $apiKey;

    /**
     * @BeforeScenario @security
     */
    function beforeAuthentication(BeforeScenarioScope $scope)
    {
        $this->truncate();

        $this->readModelPdoConnection->getConnection('default')->exec('
INSERT INTO users(id, uuid, is_active, first_name, last_name, password, salt, api_key_expires_at, api_key, email, timezone, created_at, updated_at, version) VALUES
  (1, "' . Uuid::fromString("e79198b9-0a27-4c07-b61a-b6dabe517bbb")->getBytes() .'", 1, "john", "doe", "$2y$13$ikXFnoUfIQdmLvebM9reRekEH3yf7w116eUlUK7pnv3LzeRITVnae", "d41d8cd98f00b204e9800998ecf8427e", "2040-01-01 00:00:00", "abc123", "user1@test.com", "Australia/Sydney", NOW(), NOW(), 1)
 ,(2, "' . Uuid::fromString("5b932ade-80f4-451c-b1ea-cbcb0965b6bf")->getBytes() .'", 1, "jane", "doe", "$2y$13$Bh4ba0UrJzpVYtRITp76.enjLMJb/W8hYK.GLAxScsGRM9YSJoAa2", "098f6bcd4621d373cade4e832627b4f6", NOW(), "123456", "user2@test.com", "Australia/Sydney", NOW(), NOW(), 1)
 ,(3, "' . Uuid::fromString("5b932ade-80f4-451c-b1ea-cbcb09654444")->getBytes() .'", 1, "albert", "einstein", "$2y$13$Bh4ba0UrJzpVYtRITp76.enjLMJb/W8hYK.GLAxScsGRM9YSJoAa2", "098f6bcd4621d373cade4e832627b4f6", "2040-01-01 00:00:00", "apiKeyForAStaffRole", "user3@test.com", "Australia/Sydney", NOW(), NOW(), 1)
 ,(4, "' . Uuid::fromString("5b932ade-80f4-451c-b1ea-cbcb09655555")->getBytes() .'", 1, "albert", "einstein", "$2y$13$Bh4ba0UrJzpVYtRITp76.enjLMJb/W8hYK.GLAxScsGRM9YSJoAa2", "098f6bcd4621d373cade4e832627b4f6", "2018-01-01 00:00:00", "891234", "user4@kegstar.com_at_75381_1487809657", "Australia/Sydney", NOW(), NOW(), 1)
 ,(5, "' . Uuid::fromString("5b932ade-80f4-451c-b1ea-cbcb0965b6ff")->getBytes() .'", 1, "jane", "doe", "$2y$13$Bh4ba0UrJzpVYtRITp76.enjLMJb/W8hYK.GLAxScsGRM9YSJoAa2", "098f6bcd4621d373cade4e832627b4f6", "2040-01-01 00:00:00", "7123456", "user23@test.com", "Australia/Sydney", NOW(), NOW(), 1)
        ');

    }

    /**
     * @AfterScenario @security
     */
    function afterAuthentication(AfterScenarioScope $scope)
    {
        $this->truncate();
    }

    private function truncate()
    {
        $this->readModelPdoConnection->getConnection('default')->exec("SET FOREIGN_KEY_CHECKS = 0;");
        $this->readModelPdoConnection->getConnection('default')->exec("TRUNCATE TABLE users");
        $this->readModelPdoConnection->getConnection('default')->exec("SET FOREIGN_KEY_CHECKS = 1;");

    }
}
